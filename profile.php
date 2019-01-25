<?php
session_start();
include './header.php';
include './connect.php';
$user=$_GET['user'];
$id=$_SESSION['id'];

$query="SELECT * FROM user WHERE id='$user'";
$result=$mysqli->query($query);
$table="SELECT * FROM clear_list WHERE id='$user'";
$table_re=$mysqli->query($table);
if($result->num_rows==1){
  $row=$result->fetch_array(MYSQLI_ASSOC);
}
else{
  echo "<script>alert('Who is it?');</script>";
  echo '<script>location.href="/";</script>';
}
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/profile.css">
  </head>
  <body>
    <div class="name">
      <h3><?php echo "$user"; ?></h3>
      <h3><?php echo "score : ";echo $row['score']; ?></h3>
    </div>
    <div class="solved">
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Score</th>
          <th>Time</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while ($table_row=$table_re->fetch_array(MYSQLI_ASSOC)) {
        ?>
        <tr>
          <td class="title"><?php echo $table_row['title']; ?></td>
          <td class="score"><?php echo $table_row['score']; ?></td>
          <td class="time"><?php echo $table_row['time']; ?></td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
    </div>
  </body>
</html>
