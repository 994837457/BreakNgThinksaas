<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<script src="<?php echo SITE_URL;?>public/js/jeditable/jeditable.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
$(".editable_textarea").editable("<?php echo SITE_URL;?>index.php?app=group&ac=do&ts=edit_type", {
indicator : '<img src="'+siteUrl+'public/js/loading.gif">',
type   : 'textarea',
submitdata: { _method: "put"},
select : true,
submit : '确定',
cancel : '取消',
cssclass : "editable",
tooltip   : '点击进行编辑......'
});
});
//删除帖子类型
function deltopictype(typeid){
if(confirm("确定删除吗？")){
$.ajax({
type: "POST",
url: siteUrl+'index.php?app=group&ac=do&ts=del_type',
data: "&typeid=" + typeid,
beforeSend: function(){},
success: function(result){
if(result == '0'){
window.location.reload();
}
}
});
}
}
</script>
<div class="container">
<div class="bbox">
<div class="be">
<?php include template('edit_xbar'); ?>
<div class="row">
<div class="col-md-10">
<form class="form-inline" method="POST" action="<?php echo SITE_URL;?>index.php?app=group&ac=do&ts=topic_type">
<div class="form-group">
<label class="sr-only">添加帖子分类：</label>
<input name="typename" class="form-control" placeholder="添加帖子分类">
</div>
<input type="hidden" name="groupid" value="<?php echo $strGroup['groupid'];?>" />
<button type="submit" class="btn btn-default">添加帖子分类</button>
</form>
<table class="table">
<thead>
<tr>
<th>类型</th><th>操作</th>
</tr>
</thead>
<tbody>
<?php foreach((array)$arrGroupType as $key=>$item) {?>
<tr>
<td class="editable_textarea" id="<?php echo $item['typeid'];?>"><?php echo $item['typename'];?></td><td><a href="javascript:void('0');" onclick="deltopictype('<?php echo $item['typeid'];?>')">删除</a></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
<div class="col-md-2"></div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>