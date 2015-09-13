<?php defined('IN_TS') or die('Access Denied.'); ?><ul class="nav nav-tabs" role="tablist">
<li role="presentation" <?php if($ac=='my') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('message','my')?>">最新消息</a></li>
<li role="presentation" <?php if($ac=='system') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('message','system')?>">系统消息</a></li>
<li role="presentation" <?php if($ac=='friend' || $ac=='user') { ?>class="active"<?php } ?>><a  href="<?php echo tsurl('message','friend')?>">好友消息</a></li>
</ul>