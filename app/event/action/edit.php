<?php
	defined('IN_TS') or die('Access Denied.');
	
	$userid = aac('user')->isLogin();
	
	
	switch($ts){
		//基本信息
		case "base":
			$eventid = intval($_GET['eventid']);
			$strEvent = $new['event']->find('event',array(
				'eventid'=>$eventid,
			));

			
			if($strEvent['userid']!=$userid){
				tsNotice('非法操作！');
			}
			
			$title = '编辑活动信息';
			include template("edit_base");
			break;
		
		case "basedo":
		
			//发布
			$eventid = intval($_POST['eventid']);
			$title = trim($_POST['title']);
			$typeid = intval($_POST['typeid']);
			$starttime = trim($_POST['starttime']);
			$endtime = trim($_POST['endtime']);
			$address = trim($_POST['address']);
			$content = tsClean($_POST['content']);
			
			if($TS_USER['isadmin']==0){
				//过滤内容开始
				textfilter($title);
				textfilter($content);
				//过滤内容结束
			}
			
			//更新数据
			$new['event']->update('event',array(
				'eventid'=>$eventid,
			),array(
				'typeid' => $typeid,
				'title'	=> $title,
				'starttime'	=> $starttime,
				'endtime'	=> $endtime,
				'address'	=> $address,
				'content'	=> $content,
			));
			
			//上传
			$arrUpload = tsUpload($_FILES['photo'],$eventid,'event',array('jpg','gif','png'));
			
			if($arrUpload){

				$new['event']->update('event',array(
					'eventid'=>$eventid,
				),array(
					'path'=>$arrUpload['path'],
					'photo'=>$arrUpload['url'],
				));

			}
			
			header("Location: ".tsUrl('event','show',array('id'=>$eventid)));
		
			break;
			
		case "join":
			
			$eventid = intval($_GET['eventid']);
			$strEvent = $new['event']->find('event',array(
				'eventid'=>$eventid,
			));
			
			if($strEvent['userid']!=$userid){
				tsNotice('非法操作！');
			}
			
			$arrUser = $new['event']->findAll('event_users',array(
				'eventid'=>$eventid,
			),'addtime desc');
			
			
			$title = '报名信息';
			include template('edit_join');
			
			break;

	}