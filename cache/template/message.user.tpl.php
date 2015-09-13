<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="midder">
<div class="mc">
<div class="bbox mh400">
<h1>与<span ><?php echo $strTouser['username'];?></span>的享言</h1>
<div class="usermsg">
<ul>
<?php foreach((array)$arrMessage as $key=>$item) {?>
<li <?php if($item['userid'] == $TS_USER['userid']) { ?>class="mysend"<?php } ?>>
<?php if($item['userid']==$TS_USER['userid']) { ?><span><?php echo $item['user'][username];?> <?php echo date('Y-m-d H:i:s',$item['addtime'])?></span><?php } else { ?><span><?php echo $item['user'][username];?> <?php echo date('Y-m-d H:i:s',$item['addtime'])?></span><?php } ?>
<br />
<?php echo $item['content'];?>
</li>
<?php }?>
</ul>
</div>
<div class="sendbox">
<p><textarea id="boxcontent"></textarea> </p>
<p>
<span id="sendbutton" style="display:block;"><a class="btn" href="javascript:void('0');" onclick="window.parent.sendmsg('<?php echo $TS_USER['userid'];?>','<?php echo $strTouser['userid'];?>');">回應</a></span>
<span id="loading" style="display:none;">消息送达中<img src="<?php echo SITE_URL;?>app/<?php echo $app;?>/skins/<?php echo $skin;?>/loading.gif" alt="Loading..." /></span>
</p>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>