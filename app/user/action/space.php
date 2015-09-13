<?php
defined('IN_TS') or die('Access Denied.');
//用户空间
include 'userinfo.php';
//动态
$arrFeeds = $new['user']->findAll('feed',array(
'userid'=>$strUser['userid'],
),'addtime desc',null,'15');
foreach($arrFeeds as $key=>$item){
$data = json_decode($item['data'],true);
if(is_array($data)){
foreach($data as $key=>$itemTmp){
$tmpkey = '{'.$key.'}';
$tmpdata[$tmpkey] = tsTitle(urldecode($itemTmp));
}
}
}

$arrFeeds = aac('group')->findAll('group_topic',array(
'userid'=>$strUser['userid'],
),'addtime desc',null,25);
foreach($arrFeeds as $key=>$item){
$arrFeed[$key] = $item;
$arrFeed[$key]['title']=tsTitle($item['title']); // 标题过滤
$arrFeed[$key]['desc'] = tsCutContent(strip_tags($item['content']),90); // 简介
$arrFeed[$key]['user'] = aac('user')->getOneUser($item['userid']); // 用户信息
$arrFeed[$key]['group'] = aac('group')->getOneGroup($item['groupid']); // 群组信息
/* 匹配标题图片 */
$pattern = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
preg_match($pattern, tsDecode($item['content']), $match);
if (!$match[1]) {
// 内容里面没有图片
$match[0] = '<img src="/plugins/home/newtopics/images/default.png" />';
$match[1] = '/plugins/home/newtopics/images/default.png';
}
$arrFeed[$key]['thumb'] = $match;
}
include template("space");