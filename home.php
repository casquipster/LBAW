<!DOCTYPE html>
<html>
<head>
  <title>STOCKR</title>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!-- for jquery-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />-->
  <link rel="stylesheet" href="templates/style.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
  <meta charset = "UTF-8">
</head>

<style>
body {
  background-image: url("templates/images/background.jpg");
  background-color: #cccccc;
}
</style>
<body>
  <div class="container">
    <div class="jumbotron text-center" id="j1">
      <h1>Welcome to Stockr!</h1>
      <a id="inicialBtn" href="index.php" class="btn btn-default">Get Started</a>
    <div>
  </div>

<?php include_once('templates/footer.php'); ?>