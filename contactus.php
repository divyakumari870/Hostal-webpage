<?php 
   $con = mysqli_connect('localhost', 'root', '',’contact’);

$Name =$_POST['Name']
$Phone_number =$_POST['Phone number']
$Email = $_POST['Email'];
$Your_query = $_POST['Your query'];

$sql = "INSERT INTO `table_login` (`fldName`, `fldPhone_number` `Email` `Your_query`) VALUES ('$Name' '$Phone_number' '$Email', '$Your_query');"
// $con = mysqli_query($con, $sql);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
$con->close();

 ?>