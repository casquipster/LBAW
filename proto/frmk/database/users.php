<?php
  
  function createUser($name, $username, $password, $email, $password, $phonenumber, $birthday) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO person (dateofbirth, email, full_name, gender, mobile_number, password, username, type, approved) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array(date($birthday), $email, $name, "f", $phonenumber, sha1($password), $username, 1, TRUE));
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM Person
                            WHERE username = ? AND password = ?");
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }
?>
