<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<div class="midder">
<?php include template("admin/menu");?>
<div>
<form method="get" action="<?php echo SITE_URL;?>index.php">
<input type="hidden" name="app" value="user" />
<input type="hidden" name="ac" value="admin" />
<input type="hidden" name="mg" value="user" />
<input type="hidden" name="ts" value="list" />
UID：<input type="text" name="userid" /> 用户名：<input type="text" name="username" /> <input type="submit" value="搜索" />
<a class="btn" href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=user&ts=clean">一键删除被停用用户</a>
</form>
</div>
<div class="page"><?php echo $pageUrl;?></div>
<table  cellpadding="0" cellspacing="0">
<tr class="old"><td width="60">UID</td><td width="200">Email</td><td width="100">姓名</td><td>注册时间</td><td>登录IP</td><td>验证Email</td><td>操作</td></tr>
<?php foreach((array)$arrAllUser as $key=>$item) {?>
<tr class="odd"><td><?php echo $item['userid'];?></td><td><?php echo $item['email'];?></td><td><?php echo $item['username'];?></td><td><?php echo date('Y-m-d H:i:s',$item['addtime'])?></td>
<td><?php echo $item['ip'];?></td>
<td><?php if($item['isverify']==1) { ?>已验证<?php } else { ?><font color="red">未验证</a><?php } ?></td>
<td><a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=user&ts=view&userid=<?php echo $item['userid'];?>">[明细]</a> <a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=user&ts=isenable&&userid=<?php echo $item['userid'];?>">
<?php if($item['isenable']=='0') { ?>[停用]<?php } else { ?><font color="red">[启用]</font><?php } ?></a>
<a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=user&ts=pwd&userid=<?php echo $item['userid'];?>">[修改密码]</a>
<a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=user&ts=face&userid=<?php echo $item['userid'];?>">[清除头像]</a>
<a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=user&ts=deldata&userid=<?php echo $item['userid'];?>">[删除]</a>
<a href="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=user&ts=admin&userid=<?php echo $item['userid'];?>&token=<?php echo $_SESSION['token'];?>">
<?php if($item['isadmin']==0) { ?>
[设为管理员]
<?php } elseif ($item['isadmin']==1) { ?>
<font color="red">[取消管理员]</font>
<?php } ?>
</a>
</td>
</tr>
<?php }?>
</table>
</div>
<?php include template("admin/footer");?>