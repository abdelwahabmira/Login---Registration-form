<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>registration</title>
    <link rel="stylesheet" href="design.css">

  </head>
  <body background = "images/wallpaper3.png">
    <p class="ppdiv">Registration</p>
    <div class="regdiv">


    <form class="" action="#" onsubmit ="return regemailFormat();" method="post">
      <p>Username</p>
      <input id="regusername" type="text" name="name"   placeholder="name">
      <p>Email</p>
      <input id="regemail" type="text" name="email" placeholder="email">
      <p>Password</p>
      <input id="regpassword" type="password" name="password" placeholder="password">
      <p>Confirm Password</p>
      <input id="confregpassword" type="password" name="confirmpassword" placeholder="confirm password">
      <input type="submit" name="submit" value="Register" onclick="validate_register()" >
    </form>
    </div>
    <script src="index1.js" charset="utf-8"></script>
    <?php
session_start();
if(isset($_POST['submit'])){
  $con= mysqli_connect('localhost','root','','db_lab2')or die("Connection failed: " . mysqli_connect_error());

$email= $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$Cpassword = $_POST['confirmpassword'];


if($name!=""&&$password!=""&&$password==$Cpassword&&$email!=""){
  $query1 = mysqli_query($con,"select * from users where email = '".$email."' ")or die (mysqli_connect_error());
  $row = mysqli_fetch_row($query1);
  if($row){
    echo  "<script language='javascript'>
alert('sorry this email already exists , invalid credentials');
</script>";

  }
  else {
    $query = mysqli_query($con,"insert into users (`email`,`name`,`password`)values('$email','$name',MD5('$password') )");
    $_SESSION['name']=$name;
    header('location:welcome.php');
  }
}


}




     ?>
  </body>
</html>
