<?php
session_start();
$link = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$argv=explode('/',strtolower($link));
$argc=count($argv);
switch ($argv[1]) {
  case '':
    if(isset($_SESSION['id'])){
      include './prob.php';
      die;
    }
    else {
      include './welcome.php';
      die;
    }
}
?>