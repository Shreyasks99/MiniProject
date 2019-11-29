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
if(isset($_POST['name']) && isset($_POST['email']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sel="Select * from tbl_images where product_name='$name' and email='$email'";
    $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret==false)
    {
        echo "<center><h2 style='color:red'>Product does not exist</h2></center>";
    }
    else
    {
        $sel="delete from tbl_images where product_name='$name' and email='$email'";
        $cq=mysqli_query($conn,$sel)or die(mysqli_error($conn));
        header('Location:afteradmin.html');
    }
}
Mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<h3>Delete items</h3>

<div class="container">
  <form action="" method="POST">
    <label for="name">Product Name</label>
    <input type="text" id="fname" name="name" placeholder="Your Product name..">

    <label for="email">Email</label>
    <input type="text" id="lname" name="email" placeholder="Your email.">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>