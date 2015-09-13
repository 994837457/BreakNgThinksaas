<?php
define('IN_TS', true);
define('THINKROOT', dirname(__FILE__));
define('THINKAPP', THINKROOT . '/app');
define('THINKDATA', THINKROOT . '/data');
define('THINKSAAS', THINKROOT . '/thinksaas');
define('THINKPLUGIN', THINKROOT . '/plugins');
include THINKSAAS.'/thinksaas.php';
unset($GLOBALS);
