<?php 

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$phone = $_POST['phone'];
$s = "select * from usertable where name='$name' ";
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1)
{
	alert("Username Already Taken") ;
}
else
{
	$reg = "insert into usertable(name , password , phone) values ('$name','$pass','$phone')";
	mysqli_query($con,$reg);
	echo "Registration Successful";
}