<?php session_start(); ?>
<?php
include("navbar.php");
echo"<br>Name:".$_SESSION['name'];
print"<br>USERNAME:".$_SESSION['username'];
echo"<br>Id assigned:".$_SESSION['id'];
echo"<br>Register Email Address: ".$_SESSION['email'];
 ?>
