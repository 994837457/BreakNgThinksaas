<?php defined('IN_TS') or die('Access Denied.'); ?><ul class="nav nav-tabs" role="tablist">
<li role="presentation" <?php if($ac=='index') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('attach')?>">最新资料库</a></li>
<li role="presentation" <?php if($ac=='create') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('attach','create')?>">创建新资料库</a></li>
</ul>