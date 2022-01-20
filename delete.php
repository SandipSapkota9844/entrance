<?php



include '_dbconnect.php';


$sn = $_GET['sn'];
$deletequery = "DELETE FROM `data` WHERE `sn` = '$sn'";
$query = mysqli_query($conn, $deletequery);

if ($query) {
  echo "<script>alert('Data Deleted Successfully');</script>";
 header("Location: dashboard.php");
}
else {
  echo "<script>alert('Data Not Deleted');</script>";
  header("Location: dashboard.php");
}
?>