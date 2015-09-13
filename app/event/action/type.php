<?php 
defined('IN_TS') or die('Access Denied.');
//活动类型

$typeid = intval($_GET['id']);

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$lstart = $page*10-10;

if($typeid == 0){

	$url = tsUrl('event','type',array('page'=>''));
	$arr = null;
	$eventNum = $new['event']->findCount('event',array('isaudit'=>0));
	
	$title = '全部活动';

}else{

	$strType = $new['event']->find('event_type',array(
		'typeid'=>$typeid,
	));

	$url = tsUrl('event','type',array('id'=>$typeid,'page'=>''));
	$arr = array(
		'typeid'=>$typeid,
		'isaudit'=>0,
	);
	
	$eventNum = $new['event']->findCount('event',$arr);

	$title = $strType['typename'];
	
}

$pageUrl = pagination($eventNum, 10, $page, $url);

$arrEvents = $new['event']->findAll('event',$arr,'addtime desc',null,$lstart.',10');
foreach($arrEvents as $key=>$item){

	$arrEvent[] = $item;
	$arrEvent[$key]['title'] = htmlspecialchars($item['title']);
	$arrEvent[$key]['address'] = htmlspecialchars($item['address']);
	$arrEvent[$key]['user'] = aac('user')->getOneUser($item['userid']);

}
include template("type");