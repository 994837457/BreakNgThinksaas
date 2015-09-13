<?php defined('IN_TS') or die('Access Denied.'); ?><div class="facebox">
<div class="bc">
<div class="face">
<a href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>" rel="face" uid="<?php echo $strUser['userid'];?>"><img title="<?php echo $strUser['username'];?>" alt="<?php echo $strUser['username'];?>" src="<?php echo $strUser['face'];?>" width="100"></a>
</div>
<div class="info">
<h3><?php echo $strUser['username'];?></h3>
<ul>
<li>
</li>
</ul>
<div class="gf">
<?php if($strUser['userid'] != $TS_USER['userid']) { ?>
<?php if($strUser['isfollow']) { ?>
<a class="btn btn-default" href="javascript:void('0');" onclick="unfollow('<?php echo $strUser['userid'];?>','<?php echo $_SESSION['token'];?>');">取消关注</a>
<?php } else { ?>
<a class="btn btn-default" href="javascript:void('0')" onclick="follow('<?php echo $strUser['userid'];?>','<?php echo $_SESSION['token'];?>');">关注</a>
<?php } ?>
<a class="btn btn-default" href="<?php echo tsurl('user','message',array(ts=>add,touserid=>$strUser['userid']))?>" rel="nofollow">享言</a>
<?php } else { ?>
<?php } ?>
</div>
</div>
<ul class="other">
<li class="br"><span class="fs14"><a href="<?php echo tsurl('user','group',array('id'=>$strUser['userid']))?>"><?php echo $strUser['count_group'];?></a></span><br />文化</li>
<li><span class="fs14"><a href="<?php echo tsurl('user','follow',array('id'=>$strUser['userid']))?>"><?php echo $strUser['count_follow'];?></a></span><br />关注</li>
<li class="br"><span class="fs14"><a href="<?php echo tsurl('user','followed',array('id'=>$strUser['userid']))?>"><?php echo $strUser['count_followed'];?></a></span><br />粉丝</li>
</ul>
<div class="fmore">
<?php if($strUser['signed']) { ?><?php echo nl2br(htmlspecialchars($strUser['signed']))?><br /><?php } elseif ($strUser['userid'] == $TS_USER['userid']) { ?>签名：亲~还没有签名，赶快去写一个吧<br /><?php } ?>
<?php if($arrTag) { ?>
<ul><li class="tags">
<?php foreach((array)$arrTag as $key=>$item) {?>
<a><?php echo $item['tagname'];?></a>
<?php }?></li></ul>
<?php } ?>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<!--广告位-->
<?php doAction('gobad','300')?>