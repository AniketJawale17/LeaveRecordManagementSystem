

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <div id="section1" class="container-fluid bg-success" style="padding-top:70px;padding-bottom:70px">
<center>  <h1>Confirm Logout</h1>
  <form class="" action="" method="post">


    <button id="login" type="submit" name="logout">LOGOUT</button>
      </form>
</center>
</div>
  </body>
</html>
<?php
  if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location:login.php');}
  ?>
