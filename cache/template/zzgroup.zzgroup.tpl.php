<?php defined('IN_TS') or die('Access Denied.'); ?><div class="bbox">	<div class="btitle">小组新帖快递</div>		<div class="bc">			<?php foreach((array)$arrRecommendGroup as $key=>$item) {?>			<div class="group-item">				<div class="sub-title">					<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['groupname'];?></a>				</div>				<ul>					<li class="sub-first">						<a href="<?php echo tsurl('group','topic',array('id'=>$item['topic_data'][0]['id']))?>" target="_blank" class="img">							<img src="<?php echo $item['topic_data'][0]['thumb'][1];?>" alt="<?php echo $item['topic_data'][0]['title'];?>" width="135" height="90"><b></b>						</a>						<div class="cont">							<h3><a href="<?php echo tsurl('group','topic',array('id'=>$item['topic_data'][0]['id']))?>" target="_blank"><?php echo $item['topic_data'][0]['title'];?></a></h3>							<p><?php echo $item['topic_data'][0]['desc'];?><a href="<?php echo tsurl('group','topic',array('id'=>$item['topic_data'][0]['id']))?>" target="_blank">详细</a></p>						</div>					</li>					<?php unset($item['topic_data'][0]);?>					<?php foreach((array)$item['topic_data'] as $k=>$v) {?>					<li><a href="<?php echo tsurl('group','topic',array('id'=>$v[id]))?>" target="_blank" title="<?php echo $v['title'];?>"><?php echo $v['title'];?></a></li>					<?php }?>				</ul>			</div>			<?php }?>		</div>	<div class="clear"></div></div>