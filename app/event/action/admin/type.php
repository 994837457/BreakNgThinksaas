<?php 
defined('IN_TS') or die('Access Denied.');

switch($ts){

	case "list":
	
		$arrType = $new['event']->findAll('event_type');
		
		include template('admin/type_list');
	
		break;
		
	case "add":
		
		include template('admin/type_add');
	
		break;
		
	case "adddo":
	
		$typename = trim($_POST['typename']);
		
		$new['event']->create('event_type',array(
			'typename'=>$typename,
		));
	
		header('Location: '.SITE_URL.'index.php?app=event&ac=admin&mg=type&ts=list');
		break;
		
	case "edit":
	
		$typeid = intval($_GET['typeid']);
		
		$strType = $new['event']->find('event_type',array(
			'typeid'=>$typeid,
		));
		
		include template('admin/type_edit');
	
		break;
		
	case "editdo":
	
		$typeid = intval($_POST['typeid']);
		$typename = trim($_POST['typename']);
	
		$new['event']->update('event_type',array(
			'typeid'=>$typeid,
		),array(
			'typename'=>$typename,
		));
		
		header('Location: '.SITE_URL.'index.php?app=event&ac=admin&mg=type&ts=list');
	
		break;
		
	case "delete":
	
		$typeid = intval($_POST['typeid']);
		$new['event']->delete('event_type',array(
			'typeid'=>$typeid,
		));
		
		$new['event']->update('event',array(
			'typeid'=>$typeid,
		),array(
			'typeid'=>0,
		));
	
		header('Location: '.SITE_URL.'index.php?app=event&ac=admin&mg=type&ts=list');
		break;

}