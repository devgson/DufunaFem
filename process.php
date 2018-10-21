<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$country = $_POST['country'];
saveToDatabase($fname,$lname,$email,$pass,$cpass,$phone,$gender,$country);
header('Location:success.html');
   function saveToDatabase($fname,$lname,$email,$pass,$cpass,$phone,$gender,$country) {   
   $serverName = "localhost";   
   $database = "registration";   
   $username = "root";   
   $password = "";   
   //Open database connection   
   $conn = mysqli_connect($serverName, $username, $password, $database);   
   // Check that connection exists   
   if (!$conn) {       
   die("Connection failed: " . mysqli_connect_error());  
    }   
    $sql = "INSERT INTO signup (firstname, lastname, email, password, confirm, gender, country,phone)VALUES ('$fname','$lname','$email','$pass','$cpass','$gender','$country','$phone')";  
   $result = mysqli_query($conn, $sql);   
   //Check for errors   
   if (!$result) {       die("Error: " . $sql . "<br>" . mysqli_error($conn));   }  
    //Close the connection   
   mysqli_close($conn);
 }

