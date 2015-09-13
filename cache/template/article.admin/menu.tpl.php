<?php defined('IN_TS') or die('Access Denied.'); ?><h2>夢想管理</h2>
<div class="tabnav">
<ul>
<li <?php if($mg=='options') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=article&ac=admin&mg=options">夢想配置</a></li>
<li <?php if($mg=='cate' && $ts=='list') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=article&ac=admin&mg=cate&ts=list">分类列表</a></li>
<li <?php if($mg=='cate' && $ts=='add') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=article&ac=admin&mg=cate&ts=add">新建分类</a></li>
<li <?php if($mg=='post' && $ts=='list') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=article&ac=admin&mg=post&ts=list">夢想列表</a></li>
</ul>
</div>