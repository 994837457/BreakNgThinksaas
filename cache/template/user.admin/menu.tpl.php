<?php defined('IN_TS') or die('Access Denied.'); ?><h2>用户管理</h2>
<div class="tabnav">
<ul>
<li <?php if($mg=='options') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=options">用户配置</a></li>
<li <?php if($mg=='user' && $ts=='list') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=user&ts=list">用户管理</a></li>
<?php if($mg=='user' && $ts=='view') { ?><li class="select"><a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=user&ts=list"><?php echo $strUser['username'];?>用户信息</a></li>
<?php } ?>
<li <?php if($mg=='role' && $ts=='list') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=role&ts=list">角色管理</a></li>
<li <?php if($mg=='score' && $ts=='list') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=score&ts=list">积分设置</a></li>
<li <?php if($mg=='score' && $ts=='send') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=score&ts=send">送积分</a></li>
<li <?php if($mg=='guestbook' && $ts=='list') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=guestbook&ts=list">留言管理</a></li>
</ul>
</div>