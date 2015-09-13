<?php 
defined('IN_TS') or die('Access Denied.');

/* header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');
header('Retry-After: 3600');
header('X-Powered-By:');

tsNotice('APP升级中...','点击返回首页',SITE_URL); */

$arrType = $new['event']->findAll('event_type');