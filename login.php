<!DOCTYPE html>
<html lang="en">
<head>
  <title>wargame</title>
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
  <div class="login-box">
    <form action="./login_check.php" method="post">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="id">
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" name="pw">
      </div>

      <input type="submit" class="btn" name="" value="Sign">
    </form>
  <input type="button" class="btn" name="" value="Join" onclick="location.href='./signup.php'">
  </div>
</body>
</html>
