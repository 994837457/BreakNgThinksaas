<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<?php doAction('editor_id','mini')?>
<div class="container">
<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL;?>">首页</a></li>
<li><a href="<?php echo tsurl('event')?>">活动</a></li>
<li class="active"><?php echo $strEvent['title'];?></li>
</ol>
<div class="row">
<div class="col-md-8">
<div class="bbox">
<div class="bc event">
<h1><?php echo $strEvent['title'];?></h1>
<div class="photo">
<a href="">
<img title="点击看大图" src="<?php if($strEvent['photo']) { ?><?php echo tsXimg($strEvent['photo'],'event',500,'',$strEvent['path'])?><?php } else { ?><?php echo SITE_URL;?>app/event/skins/default/event.jpg<?php } ?>" />
</a>
</div>
<div class="info">
开始时间: <?php echo date('Y-m-d H:i',strtotime($strEvent['starttime']))?><br>
结束时间: <?php echo date('Y-m-d H:i',strtotime($strEvent['endtime']))?><br>
地点: <?php echo $strEvent['address'];?><br>
发起人: <a href="<?php echo tsurl('user','space',array('id'=>$strEvent['user'][userid]))?>"><?php echo $strEvent['user'][username];?></a> <br>
<?php if($arrOrganizer) { ?>
组织者:
<?php foreach((array)$arrOrganizer as $key=>$item) {?>
<a href="#"><?php echo $item['username'];?></a> &nbsp;
<?php }?>
<br>
<?php } ?>
类型: <a href="<?php echo tsurl('event','type',array('id'=>$strEvent['type']['typeid']))?>"><?php echo $strEvent['type'][typename];?></a><br>
<?php echo $strEvent['count_userwish'];?>人感兴趣    <?php echo $strEvent['count_userdo'];?>人参加
</div>
<div class="tar">
<?php if($isEventUser=='0') { ?>
<a class="btn btn-default" href="javascript:void('0');" onclick="tsPost('index.php?app=event&ac=do&ts=love',{'eventid':'<?php echo $strEvent['eventid'];?>','status':'1'})">我感兴趣</a>   <a class="btn btn-success" href="javascript:void('0');" onclick="doEventForm('<?php echo intval($TS_USER['userid'])?>')">我要参加</a>
<?php } else { ?>
<?php if($strEventUser['status']=='1') { ?>
<div>我对这个活动感兴趣</div>
<span>&gt; <a href="javascript:void('0');" onclick="doEvent('<?php echo $strEvent['eventid'];?>','<?php echo $GLOBALS['TS_USER'][userid];?>');">我要参加</a></span>
<?php } elseif ($strEventUser['status']=='0') { ?>
<div>我会参加这个活动</div>
<?php } ?>
<span>&gt;
<a href="javascript:void('0');" onclick="cancelEvent('<?php echo $strEvent['eventid'];?>');">
我不去了</a></span>
<?php } ?>
</div>
</div>
</div>
<div class="bbox">
<div class="btitle">活动介绍</div>
<div class="bc">
<p><?php echo $strEvent['content'];?></p>
<div style="text-align:right;">
<?php if($GLOBALS['TS_USER'][userid] == $strEvent['userid'] || $GLOBALS['TS_USER'][isadmin]=='1') { ?>
<a href="<?php echo tsurl('event','edit',array('ts'=>'base','eventid'=>$strEvent['eventid']))?>">修改</a>
<?php } ?>
</div>
</div>
</div>
<div class="bbox">
<div class="btitle">参加这个活动的成员
<span class="pl">( <a href="">全部<?php echo $strEvent['count_userdo'];?>人</a> )</span></div>
<div class="bc">
<?php foreach((array)$arrDoUser as $key=>$item) {?>
<a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><img src="<?php echo $item['face'];?>" alt="<?php echo $item['username'];?>" width="48" height="48" /></a>
<?php }?>
</div>
</div>
<div class="bbox">
<div class="btitle">你的回应</div>
<div class="bc">
<ul class="comment">
<?php foreach((array)$arrComment as $key=>$item) {?>
<li class="clearfix">
<div class="user-face">
<a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><img title="<?php echo $item['user'][username];?>" alt="<?php echo $item['user'][username];?>" src="<?php echo $item['user'][face];?>" class="pil" width="48" height="48" /></a>
</div>
<div class="reply-doc">
<h4><?php echo date('Y-m-d H:i:s',$item['addtime'])?>
<a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><?php echo $item['user'][username];?></a>
</h4>
<p><?php echo $item['content'];?></p>
<?php if($GLOBALS['TS_USER'][userid] == $strEvent['userid']) { ?>
<div class="group_banned">
<span><a href="">回复</a></span>
<span><a class="j a_confirm_link" href="javascript:void('0');" onclick="comment_del('<?php echo $item['topicid'];?>','<?php echo $item['commentid'];?>');" rel="nofollow">删除</a>
</span>
</div>
<?php } ?>
</div>
</li>
<?php }?>
</ul>
<div class="page"><?php echo $pageUrl;?></div>
<?php if($GLOBALS['TS_USER'][userid] == '') { ?>
<div style="font-size:14px;padding:40px 0;text-align:center;">请登录后回应本活动^_^</div>
<?php } else { ?>
<div>
<form method="POST" action="<?php echo tsurl('event','comment')?>">
<textarea id="editor_id" style="width:100%;" name="content"></textarea><br>
<input type="hidden" name="eventid" value="<?php echo $strEvent['eventid'];?>" />
<input class="btn btn-success" type="submit" value="加上去">
</form>
</div>
<?php } ?>
</div>
</div>
</div>
<div class="col-md-4">
<div class="bbox">
<div class="bc">
<a href="<?php echo tsurl('event','type',array(id=>$strEvent['type'][typeid]))?>">更多<?php echo $strEvent['type'][typename];?>活动</a>
</div>
</div>
<div class="bbox">
<div class="btitle">对这个活动感兴趣的成员<span class="pl">( <a href="">全部<?php echo $strEvent['count_userwish'];?>人</a> )</span></div>
<div class="bc">
<?php foreach((array)$arrWishUser as $key=>$item) {?>
<a class="nbg" href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><img alt="<?php echo $item['username'];?>" class="m_sub_img" src="<?php echo $item['face'];?>" alt="<?php echo $item['username'];?>" width="48" height="48" /></a>
<?php }?>
</div>
</div>
<?php if($strEvent['coordinate']) { ?>
<script language="javascript" src="http://api.ditu.aliyun.com/map.js" ></script>
<div class="bbox" id="mapDiv" style="width:300px;height:300px"></div>
<script language="javascript">
map=new AliMap("mapDiv"); //使用id为mapDiv的层创建一个地图对象
//在下面的数组之中选择需要显示的等级
var levels=[10,11,12,14,16,17],zooms=[];
for(var i=0;i<levels.length;i++)
{
zooms.push({name:levels[i],scale:360/256/Math.pow(2,levels[i])});
}
map.setZoomScales(zooms);
//将地图定位到杭州西湖
map.centerAndZoom(new AliLatLng(<?php echo $strEvent['coordinate'];?>),13);
map.addControl(new AliMapLargeControl());
//EC_S
//定义一个经纬度，这是西湖上小瀛洲(三潭印月)岛的经纬度
var latlng=new AliLatLng(<?php echo $strEvent['coordinate'];?>);
//在该坐标处创建一个标记
marker=new AliMarker(latlng);
//将该标记添加到地图
map.addOverlay(marker);
//EC_E
</script>
<?php } ?>
</div>
</div>
</div>
<div id="do_event_form" style="display:none;">
<form  id="comm-form" class="form-horizontal" method="post" action="<?php echo SITE_URL;?>index.php?app=event&ac=do&ts=join">
<div class="form-group">
<label class="col-sm-2 control-label">姓名</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="username">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">手机</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="phone">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Email</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="email">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">QQ</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="qq">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<input type="hidden" name="eventid" value="<?php echo $strEvent['eventid'];?>" />
<button type="submit" class="btn btn-success">点击提交</button>
</div>
</div>
</form>
</div>
<?php include template('footer'); ?>