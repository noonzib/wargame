<?php
$title=$_POST['title'];
$score=$_POST['score'];
$text=$_POST['text'];
$track=$_POST['track'];
$flag=$_POST['flag'];
$author=$_POST['author'];

if ($title==NULL || $score==NULL || $text==NULL || $track==NULL || $flag==NULL || $author==NULL) {
  echo "<script>alert('No white space!!');</script>";
  echo '<script>location.href="./upload.php";</script>';
  exit();
}
if ($track=="web" || $track=="rev" || $track="pwn") {
  echo "<script>alert('only web, rev, pwn change the track!');</script>";
  echo '<script>location.href="./upload.php";</script>';
  exit();
}
include './connect.php';

$check_title="SELECT * from prob WHERE title='$title'";
$result_title=$mysqli->query($check_title);
if($result_title->num_rows==1)
{
  echo "<script>alert('Can't use this title!');</script>";
  echo '<script>location.href="./upload.php";</script>';
  exit();
}
$check_flag="SELECT * from prob WHERE flag='$flag'";
$result_flag=$mysqli->query($check_title);
if($result_flag->num_flag==1)
{
  echo "<script>alert('Can't use this flag!');</script>";
  echo '<script>location.href="./upload.php";</script>';
  exit();
}
$signup=mysqli_query($mysqli,"INSERT INTO prob (title,score,text,track,flag,author) values ('$title','$score','$text','$track','$flag','$author')");
if($signup){
  echo "<script>alert('uplord success');</script>";
  echo '<script>location.href="./prob.php";</script>';
}
?>
