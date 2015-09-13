<?php defined('IN_TS') or die('Access Denied.'); ?><style type="text/css">@media screen and (max-width: 30em){
.si {height:300px;}.carousel-inner>.active {left: 0;height: 300px;}}</style>
<div class="bbox">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
<?php foreach((array)$arrSlide as $key=>$item) {?>
<li data-target="#carousel-example-generic" data-slide-to="<?php echo $key;?>"<?php if($key==0) { ?> class="active"<?php } ?>></li>
<?php }?>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<?php foreach((array)$arrSlide as $key=>$item) {?>
<div class="item<?php if($key==0) { ?> active<?php } ?>">
<a href="<?php echo $item['url'];?>" title="<?php echo $item['title'];?>"><img src="<?php echo tsXimg($item['photo'],'slide','1920','500',$item['path'],1)?>" alt="<?php echo $item['title'];?>" class="si" ></a>
<div class="carousel-caption">
<a href="<?php echo $item['url'];?>"><?php echo $item['title'];?></a>
</div>
</div>
<?php }?>
</div>
<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>