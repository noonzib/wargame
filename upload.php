<?php
session_start();
$id=$_SESSION['id'];
if($id!="admin"){
  echo "<script>alert('Who are you?');</script>";
  echo '<script>location.href="./";</script>';
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>wargame</title>
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
  <div class="login-box">
    <form action="./upload_check.php" method="post">
      <h1>Prob Upload</h1>
      <div class="textbox">
        <input type="text" placeholder="title" name="title">
      </div>
      <div class="textbox">
        <input type="text" placeholder="score" name="score">
      </div>
      <div class="textbox">
        <input type="text" placeholder="text" name="text">
      </div>
      <div class="textbox">
        <input type="text" placeholder="track" name="track">
      </div>
      <div class="textbox">
        <input type="text" placeholder="flag" name="flag">
      </div>
      <div class="textbox">
        <input type="text" placeholder="author" name="author">
      </div>
      <input type="submit" class="btn" name="" value="upload">
    </form>
  </div>
</body>
</html>
