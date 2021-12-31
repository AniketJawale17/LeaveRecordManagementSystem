<?php session_start(); ?>
<?php include("navbar.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Application Form</title>
    <style media="screen">
    form{
      text-align: inherit;
    }
    input[type=date]{
      padding-top: 0.3%;
      margin-top: 1%;
      padding-bottom: 5px;
      margin-bottom: 10px;
      width:10%
    }
    select{
      width: 20%;
      padding-bottom: 12px;
      box-sizing: content-box;
      margin-top:8px;
      margin-bottom:8px;
      border: 1px solid #ccc;
    }
    textarea {
      width: 50%; /* Full width */
      padding: 20px; /* Some padding */
      border: 1px solid #ccc; /* Gray border */
      border-radius: 4px; /* Rounded borders */
      box-sizing: border-box; /* Make sure that padding and width stays in place */
      margin-top: 9px; /* Add a top margin */
      margin-bottom: 16px; /* Bottom margin */
      resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
    }
    input[type="submit"]{
    height: 30px;
    width:100px;
    color:brown;
    font-weight: bold;
    }
    </style>
    <script type="text/javascript">
    <script>
    function changeDropdown(ddl1,ddl2) {
        var colors = new Array('Black', 'Brown', 'Blue');
        var shapes = new Array('Triangle', 'Square', 'Circle');
        var sounds = new Array('Loud', 'Soft');

        switch (ddl1.value) {
            case 'Colors':
                for (i = 0; i < colors.length; i++) {
                    createOptions(ddl2, colors[i], colors[i]);
                }
                break;
            default:
                ddl2.options.length = 0;
                break;
        }
    }
    function createOptions(ddl,text,value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.option.add(opt);
    }
</script>
  </head>
  <body>
    <div id="Application" class="container-fluid bg-success">
      <form class="application" action="" method="post" name="application">
      <h1>Application form</h1>

        Name of Department: &nbsp <select class="form-select" name="sl1" id="sl1" aria-label="Default select example" onchange="populate(this.id,'sl2')">
        <option selected>Select Department</option>
        <option value="1">CS</option>
        <option value="2">IT</option>
        <option value="3">MECH</option>
        <option value="4">CIVIL</option>
        <option value="5">Electrical</option>
        <option value="6">E&TC</option>
    </select><br>
    Name of Faculty: &nbsp &nbsp &nbsp &nbsp <select class="form-select" name="sl2" id="sl2">

  </select>
      <br>
    Type Of leave: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <select class="form-select" name="sl3" id="sl3" aria-label="Default select example">
    <option selected>Select LeaveType</option>
    <option value="1">Medical LeaveL</option>
    <option value="2">Casual Leave</option>
    <option value="3">Other</option>
    </select><br>
    From:<input type="date" name="from" value="from" id="from"> to:<input type="date" name="To" value="To" id="To" onchange="getLeaveDay(from,To)"></br>
    Total number of days:<input type="text" name="Days" id="days" style="height:10%;width:10%;"></br>
    <label for="reason">Type Your Problem</label>
    <textarea id="reason" name="reason" placeholder="write Reason of Leave" style="height:100px" required></textarea>
    <br><input type="submit" name="submit" value="Apply">

</form>
    </div>
<script type="text/javascript">
    function populate(s1,s2){
      var s1= document.getElementById(s1);
      var s2= document.getElementById(s2);
      s2.innerHTML= "";
      if(s1.value == "1"){
        var optionArray=['cs1|CS1','cs2|CS2', 'cs3|CS3'];
      }
      else if(s1.value =="2"){
        var optionArray=['it1|IT1','it2|IT2', 'it3|IT3'];
      }
      else if(s1.value == "3"){
        var optionArray=['mech1|MECH1','mech2|MECH2','mech3|MECH3'];
      }
      else if(s1.value == "4"){
        var optionArray=['cv1|civil1','civil2|CIVIL2','civil|CIVIL3'];
      }
      else if(s1.value == "5"){
        var optionArray=['1|ele1','2|ele2','el3|ele3'];
      }
      else{
        var optionArray=['1|1','2|2','3|3'];
      }
      for (var option in optionArray){
        var pair = optionArray[option].split("|");
        var newoption = document.createElement("option");
        newoption.value=pair[0];
        newoption.innerHTML=pair[1];
        s2.options.add(newoption);
      }
    }
</script>
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
  $department=$_POST['sl1'];
  $faculty=$_POST['sl2'];
  $type=$_POST['sl3'];
  $from=$_POST['from'];
  $to=$_POST['To'];
  $reason=$_POST['reason'];
  $sql="INSERT INTO application VALUES ('$department','$faculty','$type','$from','$to','$reason')";
  $res=mysqli_query($conn,$sql);
  echo"Submitted Successfully";
  header('location:welcome.php');
}


?>
  </body>
</html>
