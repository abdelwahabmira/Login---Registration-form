<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="design.css">

  </head>
  <body background = "images/wallpaper3.png">
<p class="pdiv">Login</p>
    <div class="logindiv">


    <form name="Login" action="#" onsubmit=" return loginemailFormat() " method="POST">
<p>Email</p>
    <input id="emailfeild" type="text" placeholder="Enter Email" name="email" >
<p>Password</p>
    <input id="passfeild" type="password" placeholder="Enter Password" name="password" >
    <input name="submit"  type="submit" value="Login" onclick="valid();">
  </form>
  </div>

  <script src= "index1.js" charset="utf-8"></script>

  <?php

  session_start();
  if(isset($_POST['submit']))
  {
  $con  = mysqli_connect('localhost','root','','db_lab2') or die("Connection failed: " . mysqli_connect_error());
  // mysqli_select_db('registration') or die(mysqli_error());
   $email=$_POST['email'];
   $pwd=$_POST['password'];

   if($email!=''&&$pwd!='')
   {
     $query=mysqli_query($con,"select * from users where email ='".$email."' and password ='".$pwd."'") or die(mysqli_connect_error());
     $res=mysqli_fetch_row($query);
     if($res)
     {
      $_SESSION['name']=$res[2];
      header('location:welcome.php');
     }
     else
     {
      echo "<script language='javascript'>
  alert('You entered email or password is incorrect');
  </script>";

     }
   }
   else
   {
  //  echo'Enter both email and password';
   }
  }
  ?>








  </body>
</html>
