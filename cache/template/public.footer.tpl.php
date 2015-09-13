<?php defined('IN_TS') or die('Access Denied.'); ?><div class="container ht10" ></div>
<div class="footer">
<div class="container">
<ul>
<li>
<p>
 <a href="<?php echo tsurl('home','info',array('key'=>'contact'))?>">联系BreakNg</a>
| <a href="<?php echo tsurl('home','info',array('key'=>'job'))?>">加入BreakNg</a>
</p>
<p class="footLinks"></a> © 2015  <a target="_blank" href="<?php echo SITE_URL;?>">BreakNg</a></p></li>
</ul>
</div>
</div>
<!--弹出窗口-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
<h4 class="modal-title" id="myModalLabel">提示</h4>
</div>
<div class="modal-body">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
</div>
</div>
</div>
</div>
<?php if(intval($GLOBALS['TS_USER']['userid'])) { ?>
<script src="<?php echo SITE_URL;?>public/js/imbox/imbox.js" type="text/javascript"></script>
<script>
var siteUid=<?php echo intval($GLOBALS['TS_USER']['userid'])?>; //网站用户ID
evdata(siteUid);
</script>
<?php } ?>
<script src="<?php echo SITE_URL;?>public/js/common.js" type="text/javascript"></script>
<?php if(is_file('app/'.$GLOBALS['TS_URL']['app'].'/js/extend.func.js')) { ?>
<script src="<?php echo SITE_URL;?>app/<?php echo $GLOBALS['TS_URL']['app'];?>/js/extend.func.js" type="text/javascript"></script>
<?php } ?>
<?php doAction('pub_footer')?>
</body>
</html>
<?php if($TS_SITE['base'][isgzip]==1) { ?><?php ob_end_flush();?><?php } ?>