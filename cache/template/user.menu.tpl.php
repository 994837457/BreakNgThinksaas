<?php defined('IN_TS') or die('Access Denied.'); ?><ul class="nav nav-tabs nw" role="tablist">
<li role="presentation" <?php if($ac=='space') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>">分享</a></li>
<li role="presentation" <?php if($ac=='group') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('user','group',array('id'=>$strUser['userid']))?>">文化</a></li>
</ul>
<div class="ht10"></div>