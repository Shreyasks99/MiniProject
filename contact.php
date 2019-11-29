<?php  
 $connect = mysqli_connect("localhost", "", "", "test");   
 if(isset($_POST['name']) && isset($_POST['email'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $place=$_POST['place'];
      $sub=$_POST['subject'];
      $query = "INSERT INTO contact(fname,mail,area,feedback) VALUES ('$name','$email','$place','$sub')";  
      if(mysqli_query($connect,$query))
      {  
           echo '<script>alert("Thanks For the Feedback")</script>';  
      } 
    }     
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
<div class="topnav">
  <a  href="beforemain.html">Home</a>
  <a href="mainlogin.html">Login</a>
  <a class="active" href="contact.php">Contact</a>
  <a href="#about">About</a>
</div>

<h3>Contact Form</h3>

<div class="container">
  <form action="" method="POST">
    <label for="name">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">

    <label for="arera">Area</label>
    <input type="text" id="lname" name="place" placeholder="Your place  ..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
