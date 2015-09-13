<?php defined('IN_TS') or die('Access Denied.'); ?><h2>首页管理</h2>
<div class="tabnav">
<ul>
<li <?php if($mg=='options') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=home&ac=admin&mg=options">首页配置</a></li>
<li <?php if($mg=='info' && $ts=='list') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=home&ac=admin&mg=info&ts=list">网站信息</a></li>
<li <?php if($ts=='add') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=home&ac=admin&mg=info&ts=add">添加信息</a></li>
</ul>
</div>