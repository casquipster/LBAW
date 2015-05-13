<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!isset($_POST['username']) || !isset($_POST['name']) || !isset($_POST['password']) || !isset($_POST['passwordcheck'])
    || !isset($_POST['address']) || !isset($_POST['email']) || !isset($_POST['phonenumber']) || !isset($_POST['birthday']) 
    || !isset($_POST['gender']) || !isset($_POST['type'])) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  $name = strip_tags($_POST['name']);
  $username = strip_tags($_POST['username']);
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passcheck = $_POST['passwordcheck'];
  $gender = $_POST['gender'];
  $phonenumber = $_POST['phonenumber'];
  $birthday = $_POST['birthday'];
  $type = $_POST['type'];

  if(validateData($username, $email, $password, $passcheck) == -1){
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  function validateData($username, $email, $pass, $passc){
    if(strlen($username)<4)  {
      $_SESSION['error_messages'][] = 'Username must be longer than 3 characters'; 
      return -1;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $_SESSION['error_messages'][] = 'Email is invalid'; 
      return -1;
    }
    else if($pass != $passc){
      $_SESSION['error_messages'][] = 'Passwords do not match'; 
      return -1;
    }
    else if (strlen($pass) < '8') {
         $_SESSION['error_messages'][] = "Your password must contain at least 8 characters";
         return -1;
    }
    else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/',$pass)) {
        $_SESSION['error_messages'][] = "Your password must contain at least 1 number and 1 letter";
        return -1;
    }
    else return 0;
  }

  try {
    createUser($name, $username, $password, $email, $password, $phonenumber, $birthday, $gender, $type);
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
