<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $dbHost = 'localhost';
        $dbUsername = '';
        $dbPassword = '';
        $dbName = 'test';
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
                
        $insert = $db->query("INSERT into table_image (image) VALUES ('$imgContent')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>