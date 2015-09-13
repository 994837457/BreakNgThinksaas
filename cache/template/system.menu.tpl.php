<?php defined('IN_TS') or die('Access Denied.'); ?><h2>系统管理</h2>
<div class="tabnav">
<ul>
<li <?php if($ac=='options') { ?>class="select"<?php } ?>><a href="index.php?app=system&ac=options">选项配置</a></li>

<li <?php if($ac=='cache') { ?>class="select"<?php } ?>><a href="index.php?app=system&ac=cache">缓存管理</a></li>


<li <?php if($ac=='sql') { ?>class="select"<?php } ?>><a href="index.php?app=system&ac=sql">数据库管理</a></li>

</ul>
</div>