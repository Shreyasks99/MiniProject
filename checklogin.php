<?php
session_start();
$host="localhost";
$mail="";
$pass="";
$db_name="test";
$tbl_name="mails";
$con=mysqli_connect("$host","$mail","$pass")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name) or die("cannot select DB");

if(isset($_POST['email']) && isset($_POST['password']))
{
	$email=$_POST['email'];
	$pswd=$_POST['password'];
	$ab="SELECT password,email FROM mails WHERE email='$email' and password='$pswd'";
	$result=mysqli_query($con,$ab) or die(mysqli_error($con));
	$cnt=mysqli_num_rows($result);
	if($cnt == true)
	{
		header('Location:index1.php');
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Wrong Credentials Entered");';
		echo 'window.location.href="mainlogin.html";';
		echo '</script>';
	}
}
ob_end_flush();
?>
	