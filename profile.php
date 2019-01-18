<?php
session_start();
include './header.php';
$user=$_GET['user'];

$info="SELECT * FROM user WHERE id='$user'";
$result=$mysqli->query($info);
if($result->num_rows==1){
  $row=$result->fetch_array(MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
  </body>
</html>
