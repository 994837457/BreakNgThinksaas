<?php
defined('IN_TS') or die('Access Denied.');
switch($ts){

	//感兴趣活动
	case "love":
		
		$userid = intval($TS_USER['userid']);
		
		if($userid == 0) {
			getJson('请登录后再操作！',1);
		}
		
		$eventid = intval($_POST['eventid']);

		$userNum = $new['event']->findCount('event_users',array(
			'eventid'=>$eventid,
			'userid'=>$userid,
		));
		
		if($userNum>0){
			getJson('你已经参加或者感兴趣活动',1);
		}
		
		
		$new['event']->create('event_users',array(
			'eventid'=>$eventid,
			'userid'=>$userid,
			'status'=>1,
			'addtime'=>time(),
		));
		
		//统计一下参加的
		$userDoNum = $new['event']->findCount('event_users',array(
			'eventid'=>$eventid,
			'status'=>0,
		));
		
		//统计感兴趣的
		$userWishNum = $new['event']->findCount('event_users',array(
			'eventid'=>$eventid,
			'status'=>1,
		));
		
		$new['event']->update('event',array(
			'eventid'=>$eventid,
		),array(
			'count_userdo'=>$userDoNum,
			'count_userwish'=>$userWishNum
		));
		
		//event
		$strEvent = $new['event']->find('event',array(
			'eventid'=>$eventid,
		));
		
		getJson('感兴趣活动成功',1,1);
		
		break;
		
	//取消参加活动
	case "cancel":
		$userid = intval($TS_USER['userid']);
		
		if($userid == 0) {
			echo 0;exit;
		}
		
		$eventid = intval($_POST['eventid']);
		
		$new['event']->delete('event_users',array(
		
			'eventid'=>$eventid,
			'userid'=>$userid,
		
		));
		
		//统计一下参加的
		$userDoNum = $new['event']->findCount('event_users',array(
			'eventid'=>$eventid,
			'status'=>0,
		));
		
		//统计感兴趣的
		$userWishNum = $new['event']->findCount('event_users',array(
			'eventid'=>$eventid,
			'status'=>1,
		));
		
		$new['event']->update('event',array(
			'eventid'=>$eventid,
		),array(
			'count_userdo'=>$userDoNum,
			'count_userwish'=>$userWishNum
		));
		
		echo '1';
		
		break;
		
	//参加活动
	case "join":
	
		$js = intval($_GET['js']);
		
	
		$userid = intval($TS_USER['userid']);
		
		if($userid == 0) {
			getJson('请登录后再参加活动',$js);
		}
		
		$eventid = intval($_POST['eventid']);
		
		$username = trim($_POST['username']);
		$phone = trim($_POST['phone']);
		$email = trim($_POST['email']);
		$qq = trim($_POST['qq']);
		
		if($username=='' || $phone==''){
			getJson('姓名和手机号不能为空',$js);
		}
		
		//删除之前的报名信息
		$new['event']->delete('event_users',array(
			'eventid'=>$eventid,
			'userid'=>$userid,
		));
		
		
		$new['event']->create('event_users',array(
			'eventid'=>$eventid,
			'userid'=>$userid,
			'username'=>$username,
			'phone'=>$phone,
			'email'=>$email,
			'qq'=>$qq,
			'status'=>0,
			'addtime'=>time(),
		));
		
	
		
		//统计一下参加的
		$userDoNum = $new['event']->findCount('event_users',array(
			'eventid'=>$eventid,
			'status'=>0,
		));
		
		//统计感兴趣的
		$userWishNum = $new['event']->findCount('event_users',array(
			'eventid'=>$eventid,
			'status'=>1,
		));
		
		$new['event']->update('event',array(
			'eventid'=>$eventid,
		),array(
			'count_userdo'=>$userDoNum,
			'count_userwish'=>$userWishNum
		));
		
		
		getJson('报名提交成功，感谢参与。',$js);
		
		
		break;
		
}
