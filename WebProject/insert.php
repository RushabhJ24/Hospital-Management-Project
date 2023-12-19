<?php
include('conn1.php');
// Check connection
global $conn;
if ($conn==false) {
die("Connection failed: " . mysqli_connect_error());
}
$n1=$_POST['uname'];
$n2=$_POST['uage'];
$n3=$_POST['uadd'];
$n4=$_POST['umobile'];
$n5=$_POST['uemail'];
$n6=$_POST['SelectHospital'];
$n7=$_POST['disease'];
$n8=$_POST['BloodGroup'];
$n9=$_POST['dat'];
$n0=$_POST['tim'];

$dat1=strtotime($n9);
$n11=date('Y-m-d');

$dat2=strtotime($n11);
$ti1=strtotime($n0);
$ti2=strtotime('9:59:59');

$ti3=strtotime('1:00:01');
$ti4=strtotime('14:59:59');
$ti5=strtotime('23:00:01');



if(($dat1>$dat2) && (($ti2<$ti1 && $ti1<$ti3) || ($ti4<$ti1 && $ti1<$ti5))){
$stmt="SELECT * FROM booking";

$sql = "INSERT INTO booking VALUES ('$n1',$n2,'$n3',$n4,'$n5','$n6','$n7','$n8','$n9','$n0')";
}
else if($dat1<$dat2){
    
    echo "<script>alert('Select date from Future');
    </script>";
   }
   else {
    echo "<script>alert('Select time between 10:00 am to 1:00 pm and 3:00 pm to 10:00 pm');
    </script>";
   }

if(mysqli_query($conn, $sql)){
   echo "<script>alert('Records inserted successfully.') ;</script>";
   header("Location: home2.html");

} else{
//echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); //header("Location: sqlin.html");
}
mysqli_close($conn);
?>
