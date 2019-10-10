<?php 

session_start();
header('location:atm.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$cardnumber = $_POST['cardnumber'];
$month = $_POST['month'];
$year = $_POST['year'];
// $cvv = $_POST['cvv'];
$s = "select * from carddetails where cardnumber='$cardnumber', month='$month' , year = '$year'";
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1)
{
	echo "Donation Unsuccessful Please try again";
}
else
{
	$reg = "insert into carddetails(cardnumber , month , year) values ('$cardnumber','$month','$year')";
	mysqli_query($con,$reg);
	header('location:home.php');
	echo "Donation Successful";
}
?>
