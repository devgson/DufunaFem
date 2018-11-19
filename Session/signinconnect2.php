<?php
session_start();
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

    if ($query_row){
    /*$cookie_firstname = $query_row['firstname'];
    $cookie_lastname = $query_row['lastname'];
     setcookie("firstname",$cookie_firstname,time()+3600,"/","",0);
     setcookie("lastname",$cookie_lastname,time()+3600,"/","",0);*/
     //setcookie('age',18,time()-60,""
     $_SESSION['firstname'] = $query_row['firstname'];
     $_SESSION['lastname']= $query_row['lastname'];
     $_SESSION['email'] = $query_row['email'];
     $_SESSION['phone']= $query_row['gender'];
     $_SESSION['country'] = $query_row['country'];
     $_SESSION['gender']= $query_row['gender'];
     header('location:welcome.php');
   }
   
 else{
   echo"invalid details";
 }
  }


?>

