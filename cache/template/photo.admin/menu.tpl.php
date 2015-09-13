<?php defined('IN_TS') or die('Access Denied.'); ?><h2>圖管理</h2>
<div class="tabnav">
<ul>
<li <?php if($mg=='options') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=photo&ac=admin&mg=options">圖配置</a></li>
<li <?php if($mg=='album') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=photo&ac=admin&mg=album&ts=list">圖列表</a></li>
<li <?php if($mg=='photo') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=photo&ac=admin&mg=photo&ts=list">图片列表</a></li>
</ul>
</div>