<?php 
	$sql = file_get_contents('app/event/install/install.sql');
    $sql = str_replace('ts_',$TS_DB['pre'],$sql);
	$array_sql = preg_split("/;[\r\n]/", $sql);
	
	foreach($array_sql as $sql){
		$sql = trim($sql);
		if ($sql){
			if (strstr($sql, 'CREATE TABLE')){
				preg_match('/CREATE TABLE ([^ ]*)/', $sql, $matches);
				$ret = $db->query($sql);
			} else {
				$ret = $db->query($sql);
			}
		}
	}
	$fp =  fopen('app/event/install/event_install.rice','w');
	$fw =  fwrite($fp,$config);
qiMsg("安装成功！");
?>