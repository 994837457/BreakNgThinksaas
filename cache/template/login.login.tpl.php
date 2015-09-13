<?php defined('IN_TS') or die('Access Denied.'); ?><?php if($TS_USER['userid']) { ?>
<div class="faceb bbox">
<div class="user_info">
<div class="face">
<a href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>"><img title="<?php echo $strUser['username'];?>" alt="<?php echo $strUser['username'];?>" src="<?php echo $strUser['face'];?>" class="mi"></a>
</div>
<div class="info">
<h3><a href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>"><?php echo $strUser['username'];?></a></h3>
<div>
<?php if($strUser['userid']==$TS_USER['userid']) { ?>
<a style="color: #F64F4F;" class="btn btn-sm btn-default" href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>"><?php echo $strUser['rolename'];?></a>
<?php } else { ?>
<a class="btn btn-mini"  href="javascript:void('0')" onclick="follow('<?php echo $strUser['userid'];?>');">关注</a>
<?php } ?>
</div>
</div>
<ul class="other">
<li><span class="fs14"><a href="<?php echo tsurl('user','follow',array('id'=>$strUser['userid']))?>"><?php echo $strUser['count_follow'];?></a></span><br />关注</li>
<li class="br"><span class="fs14"><a href="<?php echo tsurl('user','followed',array('id'=>$strUser['userid']))?>"><?php echo $strUser['count_followed'];?></a></span><br />粉丝</li>
<li class="br"><span class="fs14"><a href="<?php echo tsurl('user','topic',array('id'=>$strUser['userid']))?>"><?php echo $strUser['count_topic'];?></a></span><br />分享</li>
</ul>
<div class="clear"></div>
</div>
</div>
<?php } else { ?>
<div class="bs">
<div class="bbox login">
<form action="<?php echo tsurl('user','login',array('ts'=>'do'))?>" method="post">
<fieldset>
<legend>登录</legend>
<div class="item">
<br />
<input class="form-control" type="email" name="email" placeholder="Email">
</div>
<div class="item">
<br />
<input class="form-control" type="password" name="pwd" placeholder="password">
</div>
<div class="item1">
<input type="hidden" name="cktime" value="2592000" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button type="submit" class="btn btn-success">登录</button>
<?php doAction('home_login')?>
</div>
</fieldset>
</form>
</div></div>
<?php } ?>