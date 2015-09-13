<?php
defined('IN_TS') or die('Access Denied.');
//推荐文化
function newtopics(){
$arrTopics = aac('group')->findAll('group_topic',array(
'isaudit'=>0
),'addtime desc',null,20);
foreach($arrTopics as $key=>$item){
$arrTopic[$key] = $item;
$arrTopic[$key]['title']=tsTitle($item['title']); // 标题过滤
$arrTopic[$key]['desc'] = tsCutContent(strip_tags($item['content']),90); // 简介
$arrTopic[$key]['user'] = aac('user')->getOneUser($item['userid']); // 用户信息
$arrTopic[$key]['group'] = aac('group')->getOneGroup($item['groupid']); // 群组信息
/* 匹配标题图片 */
$pattern = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
preg_match($pattern, tsDecode($item['content']), $match);
if (!$match[1]) {
// 内容里面没有图片
$match[0] = '<img src="/plugins/home/newtopics/images/default.png" />';
$match[1] = '/plugins/home/newtopics/images/default.png';
}
$arrTopic[$key]['thumb'] = $match;
}
include template('newtopics','newtopics');
}
addAction('home_index_left','newtopics');