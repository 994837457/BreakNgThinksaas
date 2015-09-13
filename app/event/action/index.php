<?php 
defined('IN_TS') or die('Access Denied.');

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$lstart = $page*12-12;

$url = tsUrl('event','index',array('page'=>''));

//全部活动
$arrEvent = $new['event']->findAll('event',array('isaudit'=>0),'isrecommend desc,addtime desc',null,$lstart.',12');

$eventNum = $new['event']->findCount('event',array('isaudit'=>0));

$pageUrl = pagination($eventNum, 12, $page, $url);

$title = '活动';
include template("index");