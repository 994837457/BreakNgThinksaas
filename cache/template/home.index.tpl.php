<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<?php doAction('home_index_js')?>
<?php doAction('home_index_css')?>
<article class="container">
<?php doAction('wordad')?>
<article class="col-md-9">
<?php doAction('home_index_left')?>
</article>
<article class="col-md-3">
<?php doAction('home_index_right')?>
<!--广告位-->
<?php doAction('gobad','300')?>
</article>
<?php doAction('home_index_footer')?>
</article>
<?php include template('footer'); ?>