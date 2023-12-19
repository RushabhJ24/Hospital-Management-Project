<?php
include('connection.php');
// Check connection
global $conn;

if ($conn==false) {
die("Connection failed: " . mysqli_connect_error());
}
$n=$_POST['name'];
$na=$_POST['username'];
$ema=$_POST['email'];
$pass=$_POST['password'];
$sql = "INSERT INTO signup VALUES ('$n','$na','$ema','$pass')";
if(mysqli_query($conn, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//header("Location: sqlin.html");
}
mysqli_close($conn);
?>
