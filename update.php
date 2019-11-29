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
$res1="SELECT * FROM $tbl_name where email='$email' and product_name='$name' and del_code='$code'";
$result1=mysqli_query($conn,$res1) or die(mysqli_error($conn));
$cn=Mysqli_num_rows($result1);
if($cn==false)
{
    header("Location:update.html");
}
else
{
    while($row = mysqli_fetch_array($result1))
    {
        $name=$row['cust_name'];
        $pname=$row['product_name'];
        $descrip=$row['descrip'];
        $price=$row['price'];
        $phone=$row['phone'];
        $email=$row['email'];
        $area=$row['area'];
    }
}
?>

<?php
$email=$_POST['email'];
if(isset($_POST['update']))
{
    $nm1=$_POST['name1'];
    $sm=$_POST['pname'];
    $ag=$_POST['descrip'];
    $ad=$_POST['price'];
    $db=$_POST['phone'];
    $nm=$_POST['email1'];
    $area2=$_POST['area'];
    $res2="UPDATE $tbl_name set cust_name='$nm1',product_name='$sm',descrip='$ag',price='$ad',phone='$db',email='$nm',area='$area2' where email='$nm'";
    $result=mysqli_query($conn,$res2) or die(mysqli_error($conn));
    header('location:index1.php');
}
?>

<html>
<head>
<title>Edit Data</title>
</head>
<body>
<br/><br/>
<form name="form1" method="post" action="update.php">
<table border="0">
<tr>
<td>Name</td>
<td><input type="text" name="name1" value="<?php echo $name;?>"></td>
</tr>
<tr>
<td>Product name</td>
<td><input type="text" name="pname" value="<?php echo $pname;?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="descrip" value="<?php echo $descrip;?>"></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name="price" value="<?php echo $price;?>"></td>
</tr>
<tr>
<td>Phone</td>
<td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="uniqid" name="email1" value="<?php echo $email;?>"readonly></td>
</tr>
<tr>
<td>Area</td>
<td><input type="text" name="area" value="<?php echo $area;?>"></td>
</tr>
<tr>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>
