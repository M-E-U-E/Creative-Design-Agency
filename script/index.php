<?php
$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
 

$conn = new mysqli('localhost','root','','project');
if ($conn->connect_error) {
    echo "connection fail";
   die("Connection failed: " . $conn->connect_error);
}else {
      $sql="INSERT INTO `agency` (`name`, `email`, `message`) VALUES ('".$name."', '".$email."', '".$message."');";
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
     echo "connection secessfully";
}
?>