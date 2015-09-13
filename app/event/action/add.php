<?php
defined('IN_TS') or die('Access Denied.');

$userid = aac('user')->isLogin();

switch($ts){

	case "":

		$title = '发布活动';
		include template("add");
	
		break;
	
	case "do":
	
		$title = trim($_POST['title']);
		$typeid = intval($_POST['typeid']);
		$starttime = trim($_POST['starttime']);
		$endtime = trim($_POST['endtime']);
		$address = trim($_POST['address']);
		$coordinate = trim($_POST['coordinate']);  //坐标
		$content = tsClean($_POST['content']);
		
		if($title == '' || $content == ''){
			tsNotice('标题和内容不能为空');
		}
		
		$eventid = $new['event']->create('event',array(
			
			'userid'	=> $userid,
			'title'	=> $title,
			'typeid' => $typeid,
			'starttime'	=> $starttime,
			'endtime'	=> $endtime,
			'address'	=> $address,
			'coordinate'	=> $coordinate,
			'content' => $content,
			'isaudit'=>1,
			'addtime'	=> time(),
			
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
		
	//地图 
	case "map":
	
		$dd = isset($_GET['dd']) ? $_GET['dd'] : '中国北京';

		include template('add_map');
	
		break;

}