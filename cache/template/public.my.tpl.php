<?php defined('IN_TS') or die('Access Denied.'); ?><div class="user_info">
<div class="photo"><img class="mi" src="<?php echo $strUser['face'];?>" /></div>
<div class="info">
<div class="username"><a target="_blank" style="color: white;" href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>"><?php echo $strUser['username'];?></a></div>
<div class="stats-mod">
<li style="margin-bottom:5px;"><a href="<?php echo tsurl('my','score')?>" style="color: white"><strong><?php echo $strUser['count_score'];?>积分</strong></a></li>
<!--<li><a href="#"><strong>1</strong>T币</a></li>-->
</div>
<div class="rolename"><a target="_blank"  style="border: 1px solid #FFFFFF;"class="btn btn-success" href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>">访问空间</a></div>
</div>
<div class="clear"></div>
</div>
<div class="menu-mod clearfix">
<ul class="menus">
<li <?php if($app=='my' && $ac=='index') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my')?>">
<i class="icon-user"></i>文化圈</a></li>
<li <?php if($app=='group') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group','my')?>"><i class="icon-group"></i>文化</a></li>
<li <?php if($app=='article') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article','my')?>"><i class="icon-edit"></i>文章</a></li>
<li <?php if($app=='photo') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('photo','my')?>"><i class="icon-picture"></i></i>文圖</a></li>
</ul>
<ul class="menus">
<li <?php if($app=='my' && $ac=='friend') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my','friend',array('ts'=>'follow'))?>"><i class="icon-male"></i>好友</a></li>
<li <?php if($app=='message' && $ac=='my' || $app=='message' && $ac=='system') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('message','my')?>"><i class="icon-bullhorn"></i>通知</a></li>
<li <?php if($app=='message' && $ac=='friend') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('message','friend')?>"><i class="icon-envelope"></i>私信</a></li>
</ul>
<ul class="menus">
<li <?php if($app=='my' && $ac=='setting') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my','setting',array('ts'=>'base'))?>"><i class="icon-gear"></i>账户设置</a></li>
<li <?php if($app=='my' && $ac=='score') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my','score')?>"><i class="icon-money"></i>积分</a></li>
</ul>
</div>
