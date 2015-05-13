<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/items.php');  

  if (!$_GET['id']) {
    $_SESSION['error_messages'][] = 'Invalid item!';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Login successful';  
  } else {
    $_SESSION['error_messages'][] = 'Login failed';  
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
