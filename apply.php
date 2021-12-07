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
      <form class="application" action="welcome.php" method="post" name="application">
      <h1>Application form</h1>

        Name of Department: &nbsp <select class="form-select" aria-label="Default select example">
        <option selected>Select Department</option>
        <option value="1">CS</option>
        <option value="2">IT</option>
        <option value="4">MECH</option>
        <option value="3">CIVIL</option>
        <option value="6">Electrical</option>
        <option value="5">E&TC</option>
    </select><br>
    Name of Faculty: &nbsp &nbsp &nbsp &nbsp <select class="form-select" aria-label="Default select example">
    <option selected>Select Faculty</option>
    <option value="1">A</option>
    <option value="2">B</option>
    <option value="3">C</option>
    <option value="4">D</option>
    <option value="5">E</option>
    <option value="6">F</option>
    <option value="7">G</option>
  </select>
      <br>
    Type Of leave: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <select class="form-select" aria-label="Default select example">
    <option selected>Select LeaveType</option>
    <option value="1">Medical LeaveL</option>
    <option value="2">Casual Leave</option>
    <option value="3">Other</option>
    </select><br>
    From:<input type="date" name="from" value="from"> to:<input type="date" name="to" value="To"></br>
    Total number of days:<input type="text" name="Days" style="height:10%;width:10%;"></br>
    <label for="reason">Type Your Problem</label>
    <textarea id="reason" name="reason" placeholder="write Reason of Leave" style="height:100px" required></textarea>
    <br><input type="submit" name="submit" value="Apply">
    </div>
</form>

  </body>
</html>
