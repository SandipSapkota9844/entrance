<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "entrance";

$conn = mysqli_connect($server,$username,$password,$password);
if ($conn){
echo("DB Connected");
}
else{
    die("Connection failed: " . mysqli_connect_error());
}

?>