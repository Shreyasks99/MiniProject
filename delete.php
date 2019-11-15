<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="tbl_images";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
$sql="Select * from $tbl_name";
$result=mysqli_query($conn,$sql) or die(mysqli_error($connection));
if(isset($_POST['Submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $code=$_POST['code'];
    $sel="Select * from tbl_images where product_name='$name' and email='$email' and del_code='$code'";
    $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret==false)
    {
        echo "<center><h2 style='color:red'>Product does not exist</h2></center>";
    }
    else
    {
        $sel="delete from tbl_images where product_name='$name' and email='$email' and del_code='$code'";
        $cq=mysqli_query($conn,$sel)or die(mysqli_error($conn));
        header('Location:index1.php');
    }
}
Mysqli_close($conn);
?>

<html>
<head>
<body style="background-color:#E5E5E5">
<title>Delete item</title>
</head>
<form action="" method="post">

<label for="name">Enter the name of the item to be deleted:</label>
<input id="name" maxlength="50" name="name" type="text"/><br><br>   
<label for="mail">Enter the email address of the user:</label>
<input id="mail" maxlength="50" name="email" type="text"/><br><br>
<label for="code">Enter the code of the item:</label>
<input id="code" maxlength="50" name="code" type="text"/><br>
<td align="right"><input name="Submit" type="Submit" value="Delete" />&nbsp;<input type="reset" onClick="refresh()"></p>
</form>
<form action="index1.php" method="post">
    <input type="submit" name="back" value="Back">
</form>
</html> 