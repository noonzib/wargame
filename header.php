<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
  </head>
  <body>
    <div class="header">
      <h3 class="logo">wargame</h3>
      <ul class="menu">
        <li role="presentation" id='prob'><a href="/">Challenges</a></li>
        <li><a href='logout.php'>Logout</a></li>
        <li>Hello <?php
          $id=$_SESSION['id'];
          echo "$id";
        ?></li>
      </ul>
    </div>
  </body>
</html>
