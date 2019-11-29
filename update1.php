<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="tbl_images";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
$email=$_POST['email'];
$name=$_POST['name'];
$code=$_POST['code'];
if(isset($_POST['update']))
{
    $nm1=$_POST['name1'];
    $sm=$_POST['pname'];
    $ag=$_POST['descrip'];
    $ad=$_POST['price'];
    $db=$_POST['phone'];
    $nm=$_POST['email1'];
    $area2=$_POST['area'];
    $res2="UPDATE $tbl_name set cust_name='$nm1',product_name='$sm',descrip='$ag',price='$ad',phone='$db',email='$nm',area='$area2' where email='$email' and del_code='$code' and product_name='$name'";
    $result=mysqli_query($conn,$res2) or die(mysqli_error($conn));
    header('location:index1.php');
}


