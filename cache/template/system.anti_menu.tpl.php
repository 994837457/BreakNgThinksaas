<?php defined('IN_TS') or die('Access Denied.'); ?><h2>安全中心</h2>
<div class="tabnav">
<ul>
<li <?php if($ts=='word') { ?>class="select"<?php } ?>><a href="index.php?app=system&ac=anti&ts=word">敏感词过滤</a></li>

<li <?php if($ts=='ip') { ?>class="select"<?php } ?>><a href="index.php?app=system&ac=anti&ts=ip">IP过滤</a></li>

<li <?php if($ts=='cloud') { ?>class="select"<?php } ?>><a href="index.php?app=system&ac=anti&ts=cloud">远程云过滤</a></li>

</ul>
</div>