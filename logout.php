<?php
session_start();
session_destroy();
echo "<script>alert('Good Bye!')</script>";
echo '<script>location.href="./"</script>';
?>
