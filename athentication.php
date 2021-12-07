<?php
    include('connection.php');
    $username = $_POST["Uname"];
    $password = $_POST["pswd"];
    echo "Welcome $username";

    $sql = "select * from employee where username = '$username' and password = '$password'";
    $result = mysqli_query($conn,"SELECT 'username', 'password', 'id' FROM 'employee' WHERE 1");
    echo "Returned rows are: . mysqli_num_rows($result)";
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        echo "<h1><center> Login successful </center></h1>";
    }
    else{
        echo "<h1> Login failed. Invalid username or password.</h1>";
    }
      mysqli_close($conn);
?>
