<?php
$id=$_POST['id'];
$pw=$_POST['pw'];

if ($id==NULL || $pw==NULL) {
  echo "<script>alert('No white space!!');</script>";
  echo '<script>location.href="./signup.php";</script>';
  exit();
}
include './connect.php';

$check="SELECT * from user WHERE id='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1)
{
  echo "<script>alert('Can't use this id');</script>";
  echo '<script>location.href="./signup.php";</script>';
  exit();
}

$signup=mysqli_query($mysqli,"INSERT INTO user (id,pw,score) values ('$id','$pw',0)");
if($signup){
  echo "<script>alert('sign up success');</script>";
  echo '<script>location.href="./login.php";</script>';
}
?>
