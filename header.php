<?php
$id=$_SESSION['id'];

?>

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
        <?php
          if($id=="admin"){
            echo "<li><a href='./upload.php'>Upload</a></li>";
          }
        ?>
        <li role="presentation" id='prob'><a href="/">Challenges</a></li>
        <li><a href='./score.php'>Score</a></li>
        <li><a href='./logout.php'>Logout</a></li>
        <?php echo '<li><a href="profile.php?user=';echo $id;echo '">Hello ';echo "$id";echo '</a></li>'?>
      </ul>
    </div>
  </body>
</html>
