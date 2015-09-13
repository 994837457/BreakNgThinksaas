<?php defined('IN_TS') or die('Access Denied.'); ?><?php if($GLOBALS['TS_SITE'][isgzip]==1) { ?><?php ob_start('ob_gzip');?><?php } ?>
<!DOCTYPE HTML>
<html > <head>
<meta name="google-site-verification" content="18TKlUDRFEmEbUJW8ErTidJ5s-3PFTvqsNa6z3ebv08" /><meta name="baidu-site-verification" content="kuUWBonhtZ" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-language" content="zh-CN" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="applicable-device" content="pc,mobile">
<meta name="robots" content="all" />
<meta name="save" content="history" />
<meta name="author" content="<?php echo $GLOBALS['TS_CF'][info][email];?>" />
<meta name="Copyright" content="<?php echo $GLOBALS['TS_CF'][info][name];?>" />
<title><?php if($GLOBALS['TS_URL']['app']=='home' && $GLOBALS['TS_URL']['ac']=='index') { ?><?php echo $GLOBALS['TS_SITE']['site_title'];?> x <?php echo $title;?><?php } elseif ($GLOBALS['TS_URL']['app']=='home' && $GLOBALS['TS_URL']['ac']!='index') { ?><?php echo $title;?> - <?php echo $GLOBALS['TS_SITE'][site_title];?><?php } elseif ($GLOBALS['TS_URL']['app']!='home' && $GLOBALS['TS_URL']['ac']=='index') { ?><?php echo $GLOBALS['TS_APP']['appname'];?>_<?php echo $GLOBALS['TS_SITE'][site_title];?><?php } else { ?><?php echo $title;?>_<?php echo $GLOBALS['TS_APP']['appname'];?>_<?php echo $GLOBALS['TS_SITE'][site_title];?><?php } ?>
</title>
<?php if($GLOBALS['TS_URL']['app']=='home' && $GLOBALS['TS_URL']['ac']=='index') { ?>
<meta name="keywords" content="<?php echo $GLOBALS['TS_SITE'][site_key];?>" />
<meta name="description" content="<?php echo $GLOBALS['TS_SITE'][site_desc];?>" />
<?php } else { ?>
<?php if($sitekey) { ?><meta name="keywords" content="<?php echo $sitekey;?>" /> <?php } ?>
<?php if($sitedesc) { ?><meta name="description" content="<?php echo $sitedesc;?>" /> <?php } ?>
<?php } ?>
<link rel="shortcut icon" href="<?php echo SITE_URL;?>favicon.ico" />
<link rel="stylesheet" href="<?php echo SITE_URL;?>public/bootstrap/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>theme/sample/base.css" />
<?php if(is_file('app/'.$GLOBALS['TS_URL']['app'].'/skin/style.css')) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>app/<?php echo $GLOBALS['TS_URL']['app'];?>/skin/style.css">
<?php } else { ?>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>app/<?php echo $GLOBALS['TS_URL']['app'];?>/skins/default/style.css">
<?php } ?>
<script>var siteUrl = '<?php echo SITE_URL;?>'; //网站网址</script>
<script src="<?php echo SITE_URL;?>public/js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script src="<?php echo SITE_URL;?>public/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>public/js/bootstrap3-validation.js"></script>
<style>
<?php doAction('pub_header_css')?>
@media screen and (max-width: 30em){.he5{height:300px;}}
</style>
<?php doAction('pub_header_top')?>
</head>
<body>
<nav class="teader hnavbar navbar-blue he5 " role="navigation" >
<article class="ti">
<?php doAction('home_index_header')?>
</article>
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="<?php echo SITE_URL;?>"><img title="<?php echo $GLOBALS['TS_SITE'][site_title];?>" src="<?php echo SITE_URL;?>uploadfile/logo/<?php echo $GLOBALS['TS_SITE'][logo];?>" alt="<?php echo $GLOBALS['TS_SITE'][site_title];?>" width="40" height="40" /></a>
</div>
<form class="navbar-form navbar-left hidden-xs" role="search" method="get" action="<?php echo SITE_URL;?>index.php">
<div class="form-group">
<input type="hidden" name="app" value="search" />
<input type="hidden" name="ac" value="s" />
<input type="text" class="form-control" name="kw" placeholder="尋找你所愛">
<button type="submit" class="" style="
    position: absolute;
    right: 0;
    top: 5px;
    right: 1px;
    border: 0;
    background: transparent;
"><i class="glyphicon glyphicon-search"></i></button>
</div>
</form>
<div class="appnav">
<ul style="top: 4.5%;">
<?php foreach((array)$GLOBALS['TS_SITE'][appnav] as $key=>$item) {?>
<?php if($key=='home') { ?>
<li <?php if($GLOBALS['TS_URL']['app']==$key) { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>"><?php echo $item;?></a></li>
<?php } else { ?>
<li <?php if($GLOBALS['TS_URL']['app']==$key) { ?>class="select"<?php } ?>><a href="<?php echo tsurl($key)?>"><?php echo $item;?></a></li>
<?php } ?>
<?php }?>
</ul>
</div>
<ul class="nav navbar-nav navbar-right navbar-collapse" id="header-user">
<?php if($GLOBALS['TS_USER']=='') { ?>
<li><a href="<?php echo tsurl('user','login')?>">登录</a></li>
<li><a href="<?php echo tsurl('user','register')?>">注册</a></li>
<?php } else { ?>
<li><a href="<?php echo tsurl('message','my')?>"><i class="icon-envelope-alt"></i><span class="badge t" id="newmsg"></span></a></li>
<li class="dropdown t">
<a href="<?php echo tsurl('user','space',array('id'=>$TS_USER['userid']))?>" >
<img class="img-circle" src="<?php if($GLOBALS['TS_USER']['face']=="") { ?><?php echo SITE_URL;?>public/images/user_normal.jpg<?php } else { ?><?php echo tsXimg($GLOBALS['TS_USER']['face'],'user','120','120',$GLOBALS['TS_USER'][path],'1')?><?php } ?>" align="absmiddle" alt="<?php echo $GLOBALS['TS_USER']['username'];?>" />
<?php echo $GLOBALS['TS_USER'][username];?>
<ul class="dropdown-menu" role="menu">
<li><a href="<?php echo tsurl('my','setting',array('ts'=>'base'))?>" ><i class="icon-cog"></i></a></li>
<?php if($GLOBALS['TS_SITE']['base']['isinvite']=='1') { ?>
<li>
<a href="<?php echo tsurl('user','invite')?>">邀请</a>
</li>
<?php } ?>
<li><a href="<?php echo tsurl('user','login',array(ts=>out))?>"><i class="glyphicon glyphicon-off"></i></a></li>
<?php if($GLOBALS['TS_USER']['isadmin']=='1') { ?>
<li>
<a target="_blank" href="<?php echo SITE_URL;?>index.php?app=system">管理</a>
</li>
<?php } ?>
</ul>
</li>
<?php } ?>
</ul>
</div>
</nav>
</div>