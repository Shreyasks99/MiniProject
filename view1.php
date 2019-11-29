<?php
$connect = mysqli_connect("localhost", "", "", "test"); 
?>
<table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>
                          <th>Details</th>

                     </tr>
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>
                               <td>
                                   Name:'.$row['cust_name'].'<br>
                                   Product_name:'.$row['product_name'].'<br>
                                   Description:'.$row['descrip'].'<br>
                                   Price:'.$row['price'].'<br>
                                   Phone:'.$row['phone'].'<br>
                                   Email:'.$row['email'].'<br>
                                   Area:'.$row['area'].'
                         </tr>
                     ';  
                
                }  
                ?>  
                </table>
                <a href="afteradmin.html">Back</a>
                <!DOCTYPE html>  
 <html>
      <head>
          <style>.topnav {
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
</style> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>
<html>