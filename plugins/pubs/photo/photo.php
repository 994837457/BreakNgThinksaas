<?php
defined('IN_TS') or die('Access Denied.');
//相册
function photo(){
$arrAlbum = aac('photo')->findAll('photo_album',array(
'isrecommend'=>1,
),'addtime desc',null,12);
foreach($arrAlbum as $key=>$item){
$arrAlbum[$key]['albumname']=tsTitle($item['albumname']);
}
include template('photo','photo');
}
addAction('home_index_left','photo');