<?php
defined('IN_TS') or die('Access Denied.');

$eventid = intval($_GET['id']);

//活动信息
$strEvent = $new['event']->find('event',array(
	'eventid'=>$eventid,
));

if($strEvent==''){
	header ( "HTTP/1.1 404 Not Found" );
	header ( "Status: 404 Not Found" );
	$title = '404';
	include pubTemplate ( "404" );
	exit ();
}

if($strEvent['isaudit']==1){
	tsNotice('活动审核中...');
}

$strEvent['title'] = tsTitle($strEvent['title']);
$strEvent['address'] = tsTitle($strEvent['address']);
$strEvent['content'] = tsDecode($strEvent['content']);
$strEvent['coordinate'] = tsTitle($strEvent['coordinate']);

$strEvent['user'] = aac('user')->getOneUser($strEvent['userid']);

$strEvent['type'] = $new['event']->find('event_type',array(
	
	'typeid'=>$strEvent['typeid'],

));

//wishdo
$isEventUser = 0;
if($TS_USER['userid']){
	
	$userid = $TS_USER['userid'];
	
	$isEventUser = $new['event']->findCount('event_users',array(
	
		'eventid'=>$strEvent['eventid'],
		'userid'=>$userid,
	
	));
	
}


//组织者
$arrOrganizers = $new['event']->findAll('event_users',array(
	'eventid'=>$strEvent['eventid'],
	'isorganizer'=>1,
));
foreach($arrOrganizers as $item){
	$arrOrganizer[] = aac('user')->getOneUser($item['userid']);
}


//参加这个活动的成员
$arrDoUsers = $new['event']->findAll('event_users',array(
	'eventid'=>$strEvent['eventid'],
	'status'=>0,
),'addtime desc');

foreach($arrDoUsers as $item){
	if(aac('user')->isUser($item['userid'])){
		$arrDoUser[] = aac('user')->getOneUser($item['userid']);
	}
}


//对这个活动感兴趣的人
$arrWishUsers = $new['event']->findAll('event_users',array(
	'eventid'=>$strEvent['eventid'],
	'status'=>1,
),'addtime desc');

foreach($arrWishUsers as $item){
	if(aac('user')->isUser($item['userid'])){
		$arrWishUser[] = aac('user')->getOneUser($item['userid']);
	}
}


//评论

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$url = tsUrl('event','show',array('id'=>$eventid,'page'=>''));

$lstart = $page*10-10;

$arrComments = $new['event']->findAll('event_comment',array(
	'eventid'=>$strEvent['eventid'],
),'addtime desc',null,$lstart.',10');

foreach($arrComments as $key=>$item){
	if(aac('user')->isUser($item['userid'])){
		$arrComment[$key] = $item;
		$arrComment[$key]['content'] = tsDecode($item['content']);
		$arrComment[$key]['user'] = aac('user')->getOneUser($item['userid']);
	}
}

$commentNum = $new['event']->findCount('event_comment',array(
	'eventid'=>$strEvent['eventid'],
));

$pageUrl = pagination($commentNum, 10, $page, $url);

$title = $strEvent['title'];
include template("show");