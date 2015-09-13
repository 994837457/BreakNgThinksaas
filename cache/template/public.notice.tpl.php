<?php defined('IN_TS') or die('Access Denied.'); ?><?php include pubTemplate("header");?>
<?php if($isAutoGo) { ?>
<meta http-equiv="refresh" content="2;url=<?php echo $url;?>" />
<?php } ?>
<div class="container">
<div class="bbox">
<div style="font-size:14px;text-align:center;margin:100px 0;">
<p><?php echo $notice;?></p>
<p><a href="<?php echo $url;?>"><?php echo $button;?></a></p>
</div>
</div>
</div>
<?php include pubTemplate("footer");?>