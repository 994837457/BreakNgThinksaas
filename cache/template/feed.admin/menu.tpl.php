<?php defined('IN_TS') or die('Access Denied.'); ?><h2>动态管理</h2>
<div class="tabnav">
<ul>
<li <?php if($GLOBALS['TS_URL']['mg']=='options') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=feed&ac=admin&mg=options">配置</a></li>

<li <?php if($GLOBALS['TS_URL']['mg']=='feedlist') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=feed&ac=admin&mg=feedlist">动态列表</a></li>


</ul>
</div>