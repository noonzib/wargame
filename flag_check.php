<?php
session_start();
include './connect.php';
$flag=$_POST['flag'];

$check="SELECT * FROM prob where flag='$flag'";
$result=$mysqli->query($check);
if($result->num_rows==1){
  $row=$result->fetch_array(MYSQLI_ASSOC);
  $id=$_SESSION['id'];
  $title=$row['title'];
  $score=$row['score'];
  $find="SELECT * from clear_list WHERE id='$id' and title='$title'";
  $find_re=$mysqli->query($find);
  $user="SELECT * from user WHERE id='$id'";
  $user_re=$mysqli->query($user);
  $user_row=$user_re->fetch_array(MYSQLI_ASSOC);

  if($find_re->num_rows==1)
  {
    echo "<script>alert('You already solve this prob!');</script>";
    echo '<script>location.href="/";</script>';
    exit();
  }
  $user_sc=$row['score']+$user_row['score'];
  $user_qu="UPDATE user SET score=$user_sc WHERE id='$id'";
  $query="INSERT INTO clear_list(id,title) values ('$id','$title')";
  $user_input=mysqli_query($mysqli,$user_qu);
  $input=mysqli_query($mysqli,$query);
  echo "<script>alert('Clear!!');</script>";
  echo '<script>location.href="/"</script>';
}
else {
  echo "<script>alert('Wrong!!');</script>";
  echo '<script>location.href="/"</script>';
}
?>
