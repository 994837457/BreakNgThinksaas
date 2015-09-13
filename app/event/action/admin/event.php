<?php 
defined('IN_TS') or die('Access Denied.');

switch($ts){

	case "list":
		
		$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
		
		$url = SITE_URL.'index.php?app=event&ac=admin&mg=event&ts=list&page=';
		
		$lstart = $page*10-10;
		
		$arrEvent = $new['event']->findAll('event',null,'addtime desc',null,$lstart.',10');
		
		$eventNum = $new['event']->findCount('event');
		
		$pageUrl = pagination($eventNum, 10, $page, $url);

		include template("admin/event_list");
		
		break;
		
	//审核
	case "isaudit":
		
		$eventid = intval($_GET['eventid']);
		
		$strEvent = $new['event']->find('event',array(
			'eventid'=>$eventid,
		));
		
		if($strEvent['isaudit'] == 0){
			
			$new['event']->update('event',array(
				'eventid'=>$eventid,
			),array(
				'isaudit'=>1,
			));
			
		}
		
		if($strEvent['isaudit'] == 1){
			
			$new['event']->update('event',array(
				'eventid'=>$eventid,
			),array(
				'isaudit'=>0,
			));
			
		}
		
		qiMsg('操作成功');
		
		break;
	
	//推荐
	case "isrecommend":
		
		$eventid = intval($_GET['eventid']);
		
		$strEvent = $new['event']->find('event',array(
			'eventid'=>$eventid,
		));
		
		if($strEvent['isrecommend'] == 0){
			
			$new['event']->update('event',array(
				'eventid'=>$eventid,
			),array(
				'isrecommend'=>1,
			));
			
		}
		
		if($strEvent['isrecommend'] == 1){
			
			$new['event']->update('event',array(
				'eventid'=>$eventid,
			),array(
				'isrecommend'=>0,
			));
			
		}
		
		qiMsg('操作成功');
		
		break;
		
	case "delete":
	
		$eventid = intval($_GET['eventid']);
		
		$strEvent = $new['event']->find('event',array(
			'eventid'=>$eventid,
		));
		
		if($strEvent['photo']){
			unlink('uploadfile/event/'.$strEvent['photo']);
		}
		
		$new['event']->delete('event',array(
			'eventid'=>$eventid,
		));
		
		$new['event']->delete('event_comment',array(
			'eventid'=>$eventid,
		));
		
		$new['event']->delete('event_users',array(
			'eventid'=>$eventid,
		));
		
		qiMsg('删除成功');
	
		break;
		
}