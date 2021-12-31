<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="login.css">
  <script type="text/javascript" src="login.js">

  </script>
</head>
<body>
<div class="container" id="drag">
  <div class="row justify-content-center">
  <div class="col-md-6 text-center mb-5">
  <h2>Login</h2>
</div>
</div>
  <form class="login" name="login" action = "" onsubmit = "return validation()" method = "POST">
    <div class="form-group">
      <label for="Uname">Username</label>
      <input type="text" class="form-control" id="Uname" placeholder="Enter Username" name="Uname" required >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="b1">Log in</button>
    <div class="result_msg"><?php echo $msg?></div>
  </form>

<p><button id="forgot" type="forgot" name="forgot"><a href="forgot.php">Forgot password</a></button></p>
<p>Don't have account?<button type="link" name="button"><a href="contactus.php"> Contact Us</a></button> </p>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="Employee leaving management system";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['b1'])){

    $uname=$_POST['Uname'];
    $pass=$_POST['pswd'];
    $sql="select * from employee where Employee_username='$uname' and Employee_passwords='$pass'";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
  		$row=mysqli_fetch_assoc($res);
  		$_SESSION['email']=$row['Employee_email'];
  		$_SESSION['id']=$row['Employee_id'];
      $_SESSION['username']=$row['Employee_username'];
      $_SESSION['name']=$row['Employee_name'];
      header('location:welcome.php');
    }
else{

  header('location:invalid.php');
}
}
?>
</body>
</html>
