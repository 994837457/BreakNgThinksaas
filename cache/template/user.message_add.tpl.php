<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<!--main-->
<div class="midder">
<div class="mc">
<div class="bbox">
<h1>享言</h1>
<form method="POST" action="<?php echo tsurl('user','message',array('ts'=>'do'))?>">
<table class="commtable">
<tr><th></th><td><img alt="<?php echo $strTouser['username'];?>" class="m_sub_img" src="<?php echo $strTouser['face'];?>" width="16" align="absmiddle" /> <?php echo $strTouser['username'];?></td></tr>
<tr><th valign="top"></th><td><textarea style="width:450px;height:100px;text-align: center;" name="content" placeholder="內容"></textarea></td></tr>
<tr><th></th><td>
<input type="hidden" name="touserid" value="<?php echo $strTouser['userid'];?>" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button class="btn btn-success" type="submit">发送</button>
</td></tr>
</table>
</form>
</div>
</div>
</div>
<?php include template('footer'); ?>