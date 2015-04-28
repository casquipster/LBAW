<?php 
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/items.php'); 

	if(!$_GET['id']){
		$_SESSION['error_messages'][] = 'No item selected!';
    	header('Location: ' . $_SERVER['HTTP_REFERER']);
    	exit;
	}
	$id = $_GET['id'];
	$data = getItemByID($id);
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>