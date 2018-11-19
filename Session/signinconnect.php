<?php
$connect=mysqli_connect('localhost', 'root','','registration') or die('error connecting');

if(isset($_POST['submit']))
	{

$email =$_POST['email'];
$password =$_POST['password'];

$query = " select * from signup where email='$email'&& password='$password'";
 $result= mysqli_query($connect,$query);
 $count =mysqli_num_rows($result);
 
   $query_row = mysqli_fetch_assoc($result);
    var_dump($query_row);
   /* $_SESSION['firstname'] = $query_row['firstname'];
    $_SESSION['lastname']= $query_row['lastname'];*/
    if ($query_row){
    $cookie_firstname = $query_row['firstname'];
    $cookie_lastname = $query_row['lastname'];
    $cookie_email = $query_row['email'];
    $cookie_country = $query_row['country'];
    $cookie_phone = $query_row['phone'];
    $cookie_gender = $query_row['gender']; 
     setcookie("firstname",$cookie_firstname,time()+3600,"/","",0);
     setcookie("lastname",$cookie_lastname,time()+3600,"/","",0);
     setcookie("email",$cookie_email,time()+3600,"/","",0);
     setcookie("country",$cookie_country,time()+3600,"/","",0);
     setcookie("phone",$cookie_phone,time()+3600,"/","",0);
     setcookie("gender",$cookie_gender,time()+3600,"/","",0);
     header('location:cookies.php');
   }
   
 else{
   echo"invalid details";
 }
  }


?>

