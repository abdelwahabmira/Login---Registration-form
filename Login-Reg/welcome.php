<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>welcome</title>
    <link rel="stylesheet" href="design.css">

  </head>
  <body class="weldiv" background="images/wallpaper3.png">
    <p class=""></p>
<?php
session_start();
$username = $_SESSION['name'];
echo "<p class = 'welpdiv' >Welcome ".$username."</p>";
 ?>
  </body>
</html>
