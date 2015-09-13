<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">


<div class="bbox mh400">

<div class="bc s_index">

<div class="s_menu">
<a <?php if($ts=='') { ?>class="s_select"<?php } ?> href="<?php echo tsurl('search')?>">全部</a> | 
<a <?php if($ts=='group') { ?>class="s_select"<?php } ?> href="<?php echo tsurl('search','index',array(ts=>group))?>">小组</a> | 
<a <?php if($ts=='topic') { ?>class="s_select"<?php } ?> href="<?php echo tsurl('search','index',array(ts=>topic))?>">帖子</a> | 
<a <?php if($ts=='user') { ?>class="s_select"<?php } ?> href="<?php echo tsurl('search','index',array(ts=>user))?>">用户</a> | 
<a <?php if($ts=='article') { ?>class="s_select"<?php } ?> href="<?php echo tsurl('search','index',array(ts=>article))?>">文章</a>
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

<input class="s_input" name="kw" x-webkit-speech /> 
<button class="btn btn-success" type="submit">搜索</button>

</form>
</div>


</div>
</div>

</div>


<?php include template('footer'); ?>