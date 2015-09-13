<?php
defined('IN_TS') or die('Access Denied.');
class group extends tsApp{
//构造函数
public function __construct($db){
$tsAppDb = array();
include 'app/group/config.php';
//判断APP是否采用独立数据库
if($tsAppDb){
$db = new MySql($tsAppDb);
}
parent::__construct($db);
}
//获取一个用户的信息
function getOneUser($userid){
$strUser = $this->find('user_info',array(
'userid'=>$userid,
));
if($strUser){
if($strUser['face'] && $strUser['path']){
$strUser['face'] = tsXimg($strUser['face'],'user',120,120,$strUser['path'],1);
}elseif($strUser['face'] && $strUser['path']==''){
$strUser['face']	= SITE_URL.'public/images/'.$strUser['face'];
}else{
//没有头像
$strUser['face']	= SITE_URL.'public/images/user_large.jpg';
}
}else{
$strUser = '';
}
return $strUser;
}
//获取一个文化
function getOneGroup($groupid){
$strGroup=$this->find('group',array(
'groupid'=>$groupid,
));
if($strGroup){
$strGroup['groupname'] = tsTitle($strGroup['groupname']);
$strGroup['groupdesc'] = tsDecode($strGroup['groupdesc']);
if($strGroup['photo']){
$strGroup['photo'] = tsXimg($strGroup['photo'],'group',120,120,$strGroup['path'],1);
}else{
$strGroup['photo'] = SITE_URL.'public/images/group.jpg';
}
}
return $strGroup;
}
/*
*获取文化全部内容列表
*/
function getGroupContent($page = 1, $prePageNum,$groupid){
$start_limit = !empty($page) ? ($page - 1) * $prePageNum : 0;
$limit = $prePageNum ? "LIMIT $start_limit, $prePageNum" : '';
$arrGroupContent	= $this->db->fetch_all_assoc("select * from ".dbprefix."group_topics where groupid='$groupid' order by addtime desc $limit");
return $arrGroupContent;
}
//获取推荐的文化
function getRecommendGroup($num){
$arrRecommendGroups = $this->db->fetch_all_assoc("select groupid from ".dbprefix."group where isrecommend='1' limit $num");
$arrRecommendGroup = array();
if(is_array($arrRecommendGroups)){
foreach($arrRecommendGroups as $item){
$arrRecommendGroup[] = $this->getOneGroup($item['groupid']);
}
}
return $arrRecommendGroup;
}
//获取最新创建的文化
function getNewGroup($num){
$arrNewGroups = $this->db->fetch_all_assoc("select groupid from ".dbprefix."group where `isaudit`='0' order by addtime desc limit $num");
if(is_array($arrNewGroups)){
foreach($arrNewGroups as $item){
$arrNewGroup[] = $this->getOneGroup($item['groupid']);
}
}
return $arrNewGroup;
}
/*
*获取文化全部内容数
*/
function getGroupContentNum($virtue, $setvirtue){
$where = 'where '.$virtue.'='.$setvirtue.'';
$sql = "SELECT * FROM ".dbprefix."group_topics $where";
$groupContentNum = $this->db->once_num_rows($sql);
return $groupContentNum;
}
/*
*获取内容
*/
function getOneGroupContent($topicid){
$strGroupContent = $this->db->once_fetch_assoc("select * from ".dbprefix."group_topics where topicid=$topicid");
return $strGroupContent;
}
//Refer二级循环，三级循环暂时免谈
function recomment($referid){
$strComment = $this->find('group_topic_comment',array(
'commentid'=>$referid,
));
$strComment['content'] = tsDecode($strComment['content']);
$strComment['user'] = aac('user')->getOneUser($strComment['userid']);
return $strComment;
}
//是否存在帖子
public function isTopic($topicid){
$isTopic = $this->findCount('group_topic',array(
'topicid'=>$topicid,
));
if($isTopic > 0){
return true;
}else{
return false;
}
}
//获取一条帖子
public function getOneTopic($topicid){
$strTopic = $this->find('group_topic',array(
'topicid'=>$topicid,
));
$strTopic['title'] = htmlspecialchars($strTopic['title']);
return $strTopic;
}
//判断是否存在文化
function isGroup($groupid){
$isGroup = $this->findCount('group',array(
'groupid'=>$groupid,
));
if($isGroup > 0){
return true;
}else{
return false;
}
}
//获取文化最新帖子
function newTopic($groupid=null,$limit){
$conditions = null;
if($groupid) $conditions = array('groupid'=>$groupid,'isshow'=>0);
$arrTopics = aac('group')->findAll('group_topics',$conditions,'addtime desc',null,$limit);
foreach($arrTopics as $key=>$item){
$arrTopic[] = $item;
$arrTopic[$key]['title'] = htmlspecialchars($item['title']);
}
return $arrTopic;
}
//获取话题补贴
public function topicAfter($topicid){
$arrAfter = null;
$arrAfters = $this->findAll('group_topic_add',array(
'topicid'=>$topicid,
));
foreach($arrAfters as $key=>$item){
$arrAfter[] = $item;
$arrAfter[$key]['user'] = aac('user')->getOneUser($item['userid']);
$arrAfter[$key]['title']=htmlspecialchars(stripslashes($item['title']));
}
return $arrAfter;
}
//删除帖子
public function delTopic($topicid){
$strTopic = $this->find('group_topic',array(
'topicid'=>$topicid,
));
$this->delete('group_topic',array('topicid'=>$topicid));
$this->delete('group_topic_edit',array('topicid'=>$topicid));
$this->delete('group_topic_comment',array('topicid'=>$topicid));
$this->delete('tag_topic_index',array('topicid'=>$topicid));
$this->delete('group_topic_collect',array('topicid'=>$topicid));
//删除图片
if($strTopic['photo']){
unlink('uploadfile/topic/'.$strTopic['photo']);
}
//删除文件
if($strTopic['attach']){
unlink('uploadfile/topic/'.$strTopic['attach']);
}
//删除话题补贴
$this->delTopicAfter($topicid);
$this->delTopicComment($topicid);
$this->countTopic($strTopic['groupid']);
return true;
}
//删除话题补贴
public function delTopicAfter($topicid){
$arrAfter = $this->findAll('group_topic_add',array(
'topicid'=>$topicid,
));
foreach($arrAfter as $item){
if($item['photo']){
unlink('uploadfile/after/'.$item['photo']);
}
if($item['attach']){
unlink('uploadfile/after/'.$item['attach']);
}
}
$this->delete('group_topic_add',array(
'topicid'=>$topicid,
));
return true;
}
//删除补贴
public function delAfter($id){
$strAfter = $this->find('group_topic_add',array(
'id'=>$id,
));
//删除图片
if($strAfter['photo']){
unlink('uploadfile/after/'.$strAfter['photo']);
}
//删除文件
if($strAfter['attach']){
unlink('uploadfile/after/'.$strAfter['attach']);
}
$this->delete('group_topic_add',array(
'id'=>$id,
));
return true;
}
//删除话题评论
public function delTopicComment($topicid){
$arrComment = $this->findAll('group_topic_comment',array(
'topicid'=>$topicid,
));
foreach($arrComment as $item){
$this->delComment($item['commentid']);
}
return true;
}
//删除评论
public function delComment($commentid){
$strComment = $this->find('group_topic_comment',array(
'commentid'=>$commentid,
));
//删除图片
if($strComment['photo']){
unlink('uploadfile/comment/'.$strComment['photo']);
}
//删除文件
if($strComment['attach']){
unlink('uploadfile/comment/'.$strComment['attach']);
}
$this->delete('group_topic_comment',array(
'commentid'=>$commentid,
));
return true;
}
//热门帖子：一天1
public function hotTopics($day,$num=10){
$startTime = time()-($day*3600*60);
$endTime = time();
$arrTopic = $this->findAll('group_topic',"`addtime`>'$startTime' and `addtime` < '$endTime' and and `isaudit`='0'",'count_comment desc',null,$num);
return $arrTopic;
}
//推荐喜欢的帖子
public function loveTopic($topicId,$userNum){
$strLike['num'] = $this->findCount('group_topic_collect',array(
'topicid'=>$topicId,
));
$strLike['topic']=$this->find('group_topic',array(
'topicid'=>$topicId,
));
$likeUsers = $this->findAll('group_topic_collect',array(
'topicid'=>$topicId,
),'addtime desc',null,$userNum);
foreach($likeUsers as $key=>$item){
$strLike['user'][]=aac('user')->getOneUser($item['userid']);
}
return $strLike;
}
/*
* 统计文化里的话题并更新到文化
*/
public function countTopic($groupid){
$count_topic = $this->findCount('group_topic',array(
'groupid'=>$groupid,
));
$this->update('group',array(
'groupid'=>$groupid,
),array(
'count_topic'=>$count_topic,
));
}
//热门帖子,1天，7天，30天
public function getHotTopic($day){
$startTime = time()-($day*3600*60);
$endTime = time();
$arr = "`addtime`>'$startTime' and `count_view`>'0' and `addtime`<'$endTime'";
$arrTopic = $this->findAll('group_topic',$arr,'addtime desc','topicid,title,count_view,count_comment',10);
foreach($arrTopic as $key=>$item){
$arrTopic[$key]['title']=tsTitle($item['title']);
$arrTopic[$key]['content']=tsDecode($item['content']);
}
return $arrTopic;
}
//获取推荐的帖子(全部推荐和文化推荐)
public function getRecommendTopic($groupid=null,$num=20){
if($groupid){
$arr = array(
'groupid'=>$groupid,
'isrecommend'=>1,
);
}else{
$arr = array(
'isrecommend'=>1,
);
}
$arrTopic = $this->findAll('group_topic',$arr,'addtime desc','topicid,title',$num);
foreach($arrTopic as $key=>$item){
$arrTopic[$key]['title']=tsTitle($item['title']);
$arrTopic[$key]['content']=tsDecode($item['content']);
}
return $arrTopic;
}
//析构函数
public function __destruct(){
}
}