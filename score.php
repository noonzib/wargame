<?php
  include './connect.php';
  session_start();
  $id=$_SESSION['id'];
  $query = "SELECT * from user order by score desc";
  $result=$mysqli->query($query);
?>
<?php include './header.php' ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/score.css">
  </head>
  <body>
    <div class="scoreBorad">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Score</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
          ?>
          <tr>
            <td class="id"><?php echo $row['id'];?></td>
            <td class="score"><?php echo $row['score'];?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
