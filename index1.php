<?php  
 $connect = mysqli_connect("localhost", "", "", "test");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $cust_name=$_POST['cust'];
      $descrip=$_POST['descrip'];
      $price=$_POST['price'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $area=$_POST['area'];
      $del=$_POST['del'];
      $pname=$_POST['pname'];
      $query = "INSERT INTO tbl_images(name,cust_name,descrip,price,phone,email,area,del_code,product_name) VALUES ('$file','$cust_name','$descrip','$price','$phone','$email','$area','$del','$pname')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>   
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />
           <div class="container">
           <form action="search.php" method="post">
                <input type="text" name="search" align="center">
                <input type="submit" value="Search">
            </form> 
                <form method="post" enctype="multipart/form-data">
                <p align="right">
                    <h4>Add your items here</h4>
                    <div class="container">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Items</button>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Items</h4>
                    </div>
                    <div class="modal-body">
                        <main class="my-form">
                            <div class="cotainer">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header" style="text-align: center;">
                                                <H2>Insert</H2>
                                            </div>
                                            <div class="card-body">
                                                <form name="my-form" action="" method="post">
                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">Photo</label>
                                                        <div class="col-md-6">
                                                            <input type="file" id="image" class="form-control"
                                                                name="image">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="cust_name"
                                                            class="col-md-4 col-form-label text-md-right">Name</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="cust_name" class="form-control"
                                                                name="cust">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="pname"
                                                            class="col-md-4 col-form-label text-md-right">Product Name</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="pname" class="form-control"
                                                                name="pname">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="descrip"
                                                            class="col-md-4 col-form-label text-md-right">Description</label>
                                                        <div class="col-md-6">
                                                            <textarea name="descrip" rows="5" cols="50">Enter the details of the product</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="price"
                                                            class="col-md-4 col-form-label text-md-right">Price</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="price" class="form-control"
                                                                name="price">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone"
                                                            class="col-md-4 col-form-label text-md-right">Phone</label>
                                                        <div class="col-md-6">
                                                            <input type="number" id="phone" class="form-control"
                                                                name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email"
                                                            class="col-md-4 col-form-label text-md-right">Email</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="email" class="form-control"
                                                                name="email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="area"
                                                            class="col-md-4 col-form-label text-md-right">Area</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="area" class="form-control"
                                                                name="area">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="del"
                                                            class="col-md-4 col-form-label text-md-right">Code</label>
                                                        <div class="col-md-6">
                                                            <input type="text" id="del" class="form-control"
                                                                name="del">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 offset-md-4">
                                                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />                                                        
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    </main>
                </div>
            </div>
        </div>
    </div> 
    <h4>Delete Items</h4>
    <form action="delete.php">
    <button type="submit" class="btn btn-info btn-lg">Delete Items</button>
</form>
                </p>
                </form>  
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
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  