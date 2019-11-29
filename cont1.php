<?php
$connect = mysqli_connect("localhost", "", "", "test"); 
?>
<table class="table table-bordered">  
                     <tr>  
                          <th>Details</th>
                     </tr>
                <?php  
                $query = "SELECT * FROM contact ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>
                                   Id:'.$row['id'].'<br>
                                   Name:'.$row['fname'].'<br>
                                   Mail:'.$row['mail'].'<br>
                                   Area:'.$row['area'].'<br>
                                   Feedback:'.$row['feedback'].'
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