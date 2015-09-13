<?php
defined('IN_TS') or die('Access Denied.');

$userid = aac('user')->isLogin();

switch($ts){
    case "":

        $eventid = intval($_GET['eventid']);

        //活动信息
        $strEvent = $new['event']->find('event',array(
            'eventid'=>$eventid,
        ));

        if($strEvent==''){
            header ( "HTTP/1.1 404 Not Found" );
            header ( "Status: 404 Not Found" );
            $title = '404';
            include pubTemplate ( "404" );
            exit ();
        }

        $title = '报名参加活动';
        include template('join');
        break;

    case "do":



        break;
}