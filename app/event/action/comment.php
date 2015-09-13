<?php
defined('IN_TS') or die('Access Denied.');

$userid = aac('user')->isLogin();

$eventid	= intval($_POST['eventid']);
$content	= tsClean($_POST['content']);

if($content == ''){
	tsNotice('评论内容不能为空');
}

if($TS_USER['isadmin']==0){
	//过滤内容开始
	aac('system')->antiWord($content);
	//过滤内容结束
}

$commentid = $new['event']->create('event_comment',array(
	'eventid'			=> $eventid,
	'userid'			=> $userid,
	'content'	=> $content,
	'addtime'		=> time(),
));

header("Location: ".tsUrl('event','show',array('id'=>$eventid)));