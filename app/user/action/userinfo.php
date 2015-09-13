<?php
$userid = intval($_GET['id']);
if($new['user']->isUser($userid)==false){
header("HTTP/1.1 404 Not Found");
header("Status: 404 Not Found");
$title = '404';
include pubTemplate("404");
exit;
}
$strUser = $new['user']->getOneUser($userid);
$strUser['rolename'] = aac('user')->getRole($strUser['count_score']);
//是否关注
if($TS_USER['userid'] != '' && $TS_USER['userid'] != $strUser['userid']){
$followNum = $db->once_num_rows("select * from ".dbprefix."user_follow where userid='".$TS_USER['userid']."' and userid_follow='$userid'");
if($followNum > '0'){
$strUser['isfollow'] = true;
}else{
$strUser['isfollow'] = false;
}
}else{
$strUser['isfollow'] = false;
}
//他关注的用户
$followUsers = $db->fetch_all_assoc("select userid_follow from ".dbprefix."user_follow where userid='$userid' order by addtime desc limit 8");
if(is_array($followUsers)){
foreach($followUsers as $item){
$arrFollowUser[] =  $new['user']->getOneUser($item['userid_follow']);
}
}
//关注他的用户
$followedUsers = $db->fetch_all_assoc("select userid from ".dbprefix."user_follow where userid_follow='$userid' order by addtime desc limit 8");
if(is_array($followedUsers)){
foreach($followedUsers as $item){
$arrFollowedUser[] =  $new['user']->getOneUser($item['userid']);
}
}
//加入的小组
$arrGroups = $db->fetch_all_assoc("select * from ".dbprefix."group_user where userid='$userid' limit 8");
if(is_array($arrGroups)){
foreach($arrGroups as $key=>$item){
$arrGroup[] = aac('group')->getOneGroup($item['groupid']);
}
}
//省份
if($strUser['province']){
$strProvince = $new['user']->find('area_province',array(
'provinceid'=>$strUser['province'],
));
}
//城市
if($strUser['city']){
$strCity = $new['user']->find('area_city',array(
'cityid'=>$strUser['city'],
));
}
//区域
if($strUser['area']){
$strArea = $new['user']->find('area',array(
'areaid'=>$strUser['area'],
));
}