<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pw'];
include './connect.php';

$check="SELECT * FROM user where id='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1){
	$row=$result->fetch_array(MYSQLI_ASSOC);
	if($row['pw']==$pw){
		$_SESSION['id']=$id;
		if(isset($_SESSION['id']))
		{
			echo "<script>alert('Login ok!')</script>";
			echo '<script>location.href="/"</script>';
		}
		else {
			echo "Failed";
		}
	}
	else {
		echo "<script>alert('wrong id or pw')</script>";
		echo "<script>location.href='./login.php'</script>";
	}
}
else {
	echo "<script>alert('wrong id or pw')</script>";
	echo "<script>location.href='./login.php'</script>";
}

?>
