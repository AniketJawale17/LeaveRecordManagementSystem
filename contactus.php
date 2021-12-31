<?php session_start(); ?>
<?php include("navbar.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <style media="screen">
      /* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    </style>
    <script type="text/javascript">

    </script>
  </head>
  <body>
    <div class="container">
      <form class="contactus" name="contact" action=""  method = "POST">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
        <label for="Emailid">Emailid</label>
        <input type="text" id="Emailid" name="Emailid" placeholder="Your Emailid">

        <label for="Mobno">Mobile No</label>
        <input type="text" id="Mobno" name="Mobno" placeholder="Your Mobile no."required>


        <label for="subject">Type Your Problem</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

        <input type="submit" value="submit" name="submit">

      </form>
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
    if(isset($_POST['submit'])){
      $fname=$_POST['firstname'];
      $lname=$_POST['lastname'];
      $email=$_POST['Emailid'];
      $mobno=$_POST['Mobno'];
      $subject=$_POST['subject'];
      $sql="INSERT INTO contact VALUES ('$fname','$lname','$email','$mobno','$subject')";
      $res=mysqli_query($conn,$sql);
      header('location:login.php');
    }


?>
  </body>
</html>
