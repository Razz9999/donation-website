<?php 

session_start();
header('location:donate.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$amount = $_POST['amount'];
$s = "select * from donationtable where name='$name',email='$email',phone='$phone',amount='$amount'";
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1)
{
	echo "Donation Unsuccessful Please try again";
}
else
{
	$reg = "insert into donationtable(name , email , phone ,amount) values ('$name','$email','$phone' ,'$amount')";
	mysqli_query($con,$reg);
	header('location:payment.php');

	echo "Donation Successful";
}
?>
