<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/items.php');  

  if (!$_GET['id']) {
    $_SESSION['error_messages'][] = 'No item was selected';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $id = $_GET['id'];

  $item = getItemByID($id);
  $q = getItemQuantity($id);

  if (is_null($item)) {
    $_SESSION['error_messages'][] = 'No item was selected'; 
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
  
  $smarty->assign('curItem', $item);
  $smarty->assign('quantity', $q);
  $smarty->display('templates/items/show_item.tpl');
?>
