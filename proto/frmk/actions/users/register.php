<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!$_POST['username'] || !$_POST['name'] || !$_POST['password'] || !$_POST['email'] || !$_POST['gender'] || !$_POST['phonenumber'] || !$_POST['birthday']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  $realname = strip_tags($_POST['name']);
  $username = strip_tags($_POST['username']);
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $phonenumber = $_POST['phonenumber'];
  $birthday = $_POST['birthday'];

  try {
    createUser($name, $username, $password, $email, $password, $gender, $phonenumber, $birthday);
  } catch (PDOException $e) {
  
    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating user';

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }
  $_SESSION['success_messages'][] = 'User registered successfully';  
  header("Location: $BASE_URL");
?>
