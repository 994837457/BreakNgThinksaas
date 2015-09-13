<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<script src="public/js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script>
//设为导航
function isappnav(appkey,appname){
	$.ajax({
		type:"POST",
		url:"index.php?app=system&ac=apps&ts=appnav",
		data:"&appkey="+appkey+"&appname="+appname,
		beforeSend:function(){},
		success:function(result){
			if(result == '1'){
				window.location.reload(true); 
			}
		}
	})
}

//取消导航
function unisappnav(appkey){
	$.ajax({
		type:"POST",
		url:"index.php?app=system&ac=apps&ts=unappnav",
		data:"&appkey="+appkey,
		beforeSend:function(){},
		success:function(result){
			if(result == '1'){
				window.location.reload(true); 
			}
		}
	})
}

</script>


<div class="midder">

<h2>APP管理</h2>

<div class="tabnav">
<ul>
<li class="select"><a href="index.php?app=system&ac=apps&ts=list">APP列表</a></li>
</ul>
</div>

<table width="100%" cellpadding="0" cellspacing="0">
<tr class="old">
<td width="150">APP名称</td>
<td>版本</td>
<td>介绍</td>
<td>作者</td>
<td>管理</td>
<td>操作</td>
</tr>
<?php foreach((array)$arrApp as $keys=>$item) {?>
<tr class="odd">
<td><img src="app/<?php echo $item['name'];?>/icon.png" title="<?php echo $item;?>" align="absmiddle" />
<?php echo $item['about'][name];?>(<?php echo $item['name'];?>)</td>
<td><?php echo $item['about'][version];?>
</td>
<td><?php echo $item['about'][desc];?></td>
<td><?php echo $item['about'][author];?></td>
<td>
<?php if($item['about'][isoption] == '1' && $item['about'][isinstall]=='1') { ?><a href="index.php?app=<?php echo $item['name'];?>&ac=admin&mg=options">[管理]</a><?php } ?> 
</td>
<td>
<?php if($item['about'][isappnav] == '1' && $TS_SITE['appnav'][$item['name']] == '') { ?><a href="javascript:void('0');" onclick="isappnav('<?php echo $item['name'];?>','<?php echo $item['about'][name];?>');">[导航]</a><?php } ?>

<?php if($item['about'][isappnav] == '1' && $TS_SITE['appnav'][$item['name']] != '') { ?><a href="javascript:void('0');" onclick="unisappnav('<?php echo $item['name'];?>');">[取消导航]</a><?php } ?>
</td>
</tr>
<?php }?>
</table>

</div>

<?php include template('footer'); ?>