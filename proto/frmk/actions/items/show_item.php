<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/items.php');  

  if (!$_GET['id']) {
    $_SESSION['error_messages'][] = 'No item was selected';
    $_SESSION['form_values'] = $_GET;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $id = $_GET['id'];

  $stmt = getItemByID($id);
  
  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Login successful';  
  } else {
    $_SESSION['error_messages'][] = 'Login failed';  
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
