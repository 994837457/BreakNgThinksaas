<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<script src="<?php echo SITE_URL;?>public/js/uploadify/jquery.uploadify.min.js?ver=<?php echo rand(0,9999)?>" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/js/uploadify/uploadify.css">
<script type="text/javascript">
$(function() {
$('#file_upload').uploadify({
'auto'     : true,
'fileTypeDesc' : 'jpeg,jpg,gif,png图片格式',
'fileTypeExts' : '*.jpeg;*.jpg;*.gif;*.png',
'buttonImage' : '<?php echo SITE_URL;?>public/images/upload.png',
'swf'      : '<?php echo SITE_URL;?>public/js/uploadify/uploadify.swf',
'formData' : {
'albumid':'<?php echo $albumid;?>',
'addtime':'<?php echo $addtime;?>',
'tokens':"<?php echo md5('unique_salt' . $addtime)?>"
},
'uploader' : '<?php echo SITE_URL;?>index.php?app=photo&ac=upload&ts=do',
'onQueueComplete' : function(queueData) {
window.location = siteUrl+"index.php?app=photo&ac=album&ts=info&albumid=<?php echo $albumid;?>&addtime=<?php echo $addtime;?>";
}
});
});
</script>
<div class="container">
<div class="panel panel-default">
<div class="panel-body">
<?php include template('menu'); ?>
<h1>上传照片 - <?php echo $strAlbum['albumname'];?></h1>
<div style="padding:0 10px;">
<p style="padding:10px 0;">上传文件只支持：jpg，gif，png格式；上传最大支持1M的图片</p>
<div id="queue"></div>
<input id="file_upload" name="file_upload" type="file" multiple="true">
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>