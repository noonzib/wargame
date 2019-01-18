<?php
  include './connect.php';
  $web_query="SELECT * FROM prob where track='web'";
  $web_result=$mysqli->query($web_query);
  $rev_query="SELECT * FROM prob where track='rev'";
  $rev_result=$mysqli->query($rev_query);
  $pwn_query="SELECT * FROM prob where track='pwn'";
  $pwn_result=$mysqli->query($pwn_query);
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/prob.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <?php include './header.php' ?>
    <div class="center">
      <div class="container">
        <h4>Web</h4>
        <div class="web mid">
          <?php
            while ($row=$web_result->fetch_array(MYSQLI_ASSOC)) {
          ?>
              <div class="box">
                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                <div class="content">
                  <h3><?php echo $row['title']; echo " ";;echo $row['score'];?>pt</h3>
                  <p class="text"><?php echo $row['text'];?></p>
                </div>
              </div>
            <?php } ?>
        </div>
      </div>
      <div class="container">
        <h4>Reversing</h4>
        <div class="Reversing mid">
          <?php
            while ($rev_row=$rev_result->fetch_array(MYSQLI_ASSOC)) {
          ?>
              <div class="box">
                <div class="icon"><i class="fa fa-code" aria-hidden="true"></i></div>
                <div class="content">
                  <h3><?php echo $rev_row['title']; echo " ";echo $rev_row['score'];?>pt</h3>
                  <p class="text"><?php echo $rev_row['text'];?></p>
                </div>
              </div>
            <?php } ?>
        </div>
      </div>
      <div class="container">
        <h4>Pwnable</h4>
        <div class="Pwnable mid">
          <?php
            while ($pwn_row=$pwn_result->fetch_array(MYSQLI_ASSOC)) {
          ?>
              <div class="box">
                <div class="icon"><i class="fa fa-linux" aria-hidden="true"></i></div>
                <div class="content">
                  <h3><?php echo $pwn_row['title']; echo " ";echo $pwn_row['score'];?>pt</h3>
                  <p class="text"><?php echo $pwn_row['text'];?></p>
                </div>
              </div>
            <?php } ?>
        </div>
      </div>
    </div>
    <?php include './footer.php' ?>
  </body>
</html>
