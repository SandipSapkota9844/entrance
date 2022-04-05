<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$database = "project";
$conn = mysqli_connect($server, $username, $password, $database);
if ($conn) {
  echo '<script>console.log("Connection Successful")</script>';
} else {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $fathername = $_POST['fathername'];
  $mothername = $_POST['mothername'];
  $personalno = $_POST['personalno'];
  $parentno = $_POST['parentno'];
  $class = $_POST['class'];
  $faculty = $_POST['faculty'];
  $query = "INSERT INTO `data` (`sn`, `firstname`, `lastname`, `fathername`, `mothername`, `personalno`, `parentsno`, `class`, `faculty`) values( NULL,'$firstname','$lastname','$fathername','$mothername','$personalno','$parentno','$class','$faculty')";
  $data = mysqli_query($conn, $query);
  if ($data) {
    echo '<script>alert("Registration Compelete")</script>';
  } else {
    echo '<script>alert("Registration Error!! Please Try Again!")</script>';
  }
}

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
            * {
                font-family: 'Nunito', sans-serif;
            }
            
            input[type=text],
            select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            
            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            
            input[type=submit]:hover {
                background-color: #45a049;
            }
            
            button {
                border-radius: 12px;
                cursor: pointer;
            }
            
            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
            
            h1 {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h1>Please fill the following form !!!</h1>
        <div class="form">
            <form method="POST" action="?">
                <label>First Name</label>
                <input required name="firstname" type="text" placeholder="Sandip">
                <label>Last Name</label>

                <input required name="lastname" type="text" placeholder="Sapkota">
                <label>Fathers Name</label>
                <input required name="fathername" type="text" placeholder="">
                <label> Mother Name</label>
                <input required name="mothername" type="text" placeholder="">
                <label>Personal Mobile Number </label>
                <input required name="personalno" type="text" placeholder="98XXXXXXXX">
                <label>Parent's Mobile Number</label>
                <input required name="parentno" type="text" placeholder="98XXXXXXXX">
                <label>Class</label>
                <select name="class">
                    <option value="Not-Selected">Select</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                 </select>

                <label>Faculty</label>

                <select name="faculty">
              <option value="Not-Selected">Select</option>
              <option value="Science">Science</option>
              <option value="Management">Management</option>
              </select>
                <button name="submit" type="submit">
                Submit
            </button>


            </form>
        </div>
    </body>

    </html>