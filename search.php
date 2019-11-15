<?php  
 $connect = mysqli_connect("localhost", "", "", "test");  
 $name=$_POST['search'];
 ?>
 <!DOCTYPE html>  
 <html>  
      <head>   
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
      <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>
                          <th>Details</th>

                     </tr>
                <?php  
                $query = "SELECT * FROM tbl_images where product_name='$name' ORDER BY id DESC";  
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
                <form action="index1.php" method="post">
                    <input type="submit" value="Back to main page" align="center">
                </form>
      </body>  
 </html>