<?php defined('IN_TS') or die('Access Denied.'); ?><div class="s_menu">
<a <?php if($ts=='') { ?>class="s_select"<?php } ?> href="<?php echo tsurl('search','s',array(kw=>urldecode($kw)))?>">全部</a> | 
<a <?php if($ts=='group') { ?>class="s_select"<?php } ?> href="<?php echo tsurl('search','s',array(ts=>group,kw=>urldecode($kw)))?>">小组</a> | 
<a <?php if($ts=='topic') { ?>class="s_select"<?php } ?> href="<?php echo tsurl('search','s',array(ts=>topic,kw=>urldecode($kw)))?>">帖子</a> | 
<a <?php if($ts=='user') { ?>class="s_select"<?php } ?> href="<?php echo tsurl('search','s',array(ts=>user,kw=>urldecode($kw)))?>">用户</a> | 
<a <?php if($ts=='article') { ?>class="s_select"<?php } ?> href="<?php echo tsurl('search','s',array(ts=>article,kw=>urldecode($kw)))?>">文章</a>
</div>

<div>
<form method="GET" action="<?php echo SITE_URL;?>index.php">
<input type="hidden" name="app" value="search" />
<input type="hidden" name="ac" value="s" />

<?php if($ts=='group') { ?>
<input type="hidden" name="ts" value="group" />
<?php } elseif ($ts=='topic') { ?>
<input type="hidden" name="ts" value="topic" />
<?php } elseif ($ts=='user') { ?>
<input type="hidden" name="ts" value="user" />
<?php } elseif ($ts=='article') { ?>
<input type="hidden" name="ts" value="article" />
<?php } else { ?>
<?php } ?>

<input class="s_input" name="kw" value="<?php echo urldecode($kw)?>" x-webkit-speech /> 
<button class="btn btn-success" type="submit">搜索</button>
</form>
<br />
<br />
</div>