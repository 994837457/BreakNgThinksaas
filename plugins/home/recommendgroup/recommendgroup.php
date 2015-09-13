<?php
defined('IN_TS') or die('Access Denied.');
//推荐小组
function recommendgroup(){
$arrRecommendGroup = aac('group')->getRecommendGroup('12');
echo '<div class="bbox">';
echo '<div class="wrap">';
echo '<div class="cnav">
<h2 class="ctitle"><a href="http://www.breakng.com/group">文化</a></h2>
<div class="clinks">
<ul>
<li class="sort"><a class="round " href="/group/index/cateid/1"><i class="glyphicon glyphicon-eye-open"></i>
<div class="joing">
	
艺术</div></a></li>
<li class="sort"><a class="round" href="/group/index/cateid/2"><i class="glyphicon glyphicon-book"></i><div class="joing">
文學</div></a></li>
<li class="sort"><a class="round" href="/group/index/cateid/3"><i class="glyphicon glyphicon-camera"></i><div class="joing">
行摄</div></a></li>
<li class="sort"><a class="round" href="group/index/cateid/4"><i class="glyphicon glyphicon-headphones"></i><div class="joing">
娱乐</div></a></li>
<li class="sort"><a class="round" href="/group/index/cateid/5"><i class="glyphicon glyphicon-fire"></i><div class="joing">
时尚</div></a></li>
<li class="sort"><a class="round" href="/group/index/cateid/19"><i class="glyphicon glyphicon-phone"></i><div class="joing">
科技</div></a></li>
<li class="sort"><a class="round" href="/group/index/cateid/30"><i class="glyphicon glyphicon-heart"></i><div class="joing">
生活</div></a></li>
<li class="sort"><a class="round" href="/group/index/cateid/35"><i class="glyphicon glyphicon-globe"></i><div class="joing">
城市</div></a></li>
</ul>
</div>
<div class="apps-list">
<ul>
</ul>
</div>
</div>
<div class="side">
<div class="mod">
<h2 class="ctitle">
夢想
</h2>
</div>
</div>';
echo '<div class="cmain">';
foreach($arrRecommendGroup as $key=>$item){
$count_user = $item['count_user'];
echo '<div class="sub-item">
<div class="pic">
<a href="'.tsUrl('group','show',array('id'=>$item[groupid])).'">
<img src="'.$item['photo'].'" alt="'.$item['groupname'].'" title="'.$item['groupname'].'" />
</a>
</div>
<div class="info">
<a href="'.tsUrl('group','show',array('id'=>$item[groupid])).'">'.$item['groupname'].'</a>
</div>
<div class="user" >
'.$count_user.'成員
</div>
</div>';
}
echo '</div>';
echo '<div class="clear"></div>';
echo '</div></div>';
}
function recommendgroup_css(){
echo '<link href="'.SITE_URL.'plugins/home/recommendgroup/images/style.css" rel="stylesheet" type="text/css" />';
}
addAction('home_index_left','recommendgroup');
addAction('pub_header_top','recommendgroup_css');