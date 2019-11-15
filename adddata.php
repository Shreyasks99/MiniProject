<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="mails";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if(isset($_POST['submit']))
{
    $user=$_POST['username'];
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $pass=$_POST['password'];
    $phone=$_POST['phone'];
    $q="SELECT username from mails where username='$user'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret==TRUE)
    {
        echo '<script language="javascript">';
		echo 'alert("Username Already Exists");';
		echo 'window.location.href="mainlogin.html";';
		echo '</script>';    }
    else
    {
        $query="INSERT INTO mails VALUES('$user','$name','$pass','$mail','$phone')";
        mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo "<center><h2 style='color:green'>Details Saved!</h2></center>";
    }
}
Mysqli_close($conn);
if($cq==1){
    header('Location:mainlogin.html');
}
?>