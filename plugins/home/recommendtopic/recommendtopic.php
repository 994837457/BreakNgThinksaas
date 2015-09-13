<?php 
defined('IN_TS') or die('Access Denied.'); 
//推荐小组
function recommendtopic(){
	
	$arrTopics = aac('group')->findAll('group_topic',array(
		'isaudit'=>0,'isrecommend'=>1
	),'uptime desc',null,10);
	
	foreach($arrTopics as $key=>$item){
		$arrTopic[$key] = $item;
		$arrTopic[$key]['title']=tsTitle($item['title']); // 标题过滤
		$arrTopic[$key]['desc'] = tsCutContent(strip_tags($item['content']),50); // 简介
		$arrTopic[$key]['user'] = aac('user')->getOneUser($item['userid']); // 用户信息
		$arrTopic[$key]['group'] = aac('group')->getOneGroup($item['groupid']); // 群组信息
		/* 匹配标题图片 */
		$pattern = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
		preg_match($pattern, tsDecode($item['content']), $match);
		if (!$match[1]) {
			// 内容里面没有图片
			$match[0] = '<img src="/plugins/home/recommendtopic/images/default.png" />';
			$match[1] = '/plugins/home/recommendtopic/images/default.png';
		}
		$arrTopic[$key]['thumb'] = $match;
	}
	include template('recommendtopic','recommendtopic');
}

addAction('home_index_left','recommendtopic');