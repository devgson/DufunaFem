
<?php
$message = '';
if (isset($_POST['submit'])) {
 $firstname = $_POST['fname'];
 $lastname = $_POST['lname'];
 $email = $_POST['email'];
 $password = $_POST['pass'];
 $cpassword = $_POST['cpass'];
$gender = $_POST['gender'];
 $phone = $_POST['phone'];
 $country = $_POST['country'];
 if (empty($firstname) || empty($lastname) || empty($password)|| empty($cpassword) || empty($email) || empty($gender) || empty($phone) || empty($country)) {
$message = '<p class="error">All fields are required</p>';
}
 if (strlen($firstname) < 3 || strlen($firstname) > 20) {
    $message = '<p class="error">Full name must be between 3 and 20 characters</p>';
   }
   if (strlen($lastname) < 3 || strlen($lastname) > 20) {
    $message = '<p class="error">Full name must be between 3 and 20 characters</p>';
   }
   if (!is_numeric($phone)) {
    $message = '<p class="error">Phone number should be numeric</p>';
   }
   if (empty($message)) {
    $message = '<p class="success">All inputs are valid, thank you</p>';
    }
          
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
	<style type="text/css">
	body{
		background-color: #f3f3f3;
		margin: 0px;
		padding: 0px;
	}
		header{
			height: 100px;
			background-color: cadetblue;
			padding-top: 70px;
			font-size: 30px;
			font-weight: 700;
			text-align: center;
			color: #ffffff;
		margin-bottom: 50px;
		}
.form-container{
	max-width: 315px;
    margin: 0 auto;
    font: normal 14px sans-serif;
    text-align: center;
    color: #5f5f5f;

}
.formm{
	box-sizing: border-box;
    padding: 40px;
background-color:  #ffffff;
    
}
button{
	background-color: cadetblue;
	border: cadetblue;
	padding: 10px 10px 10px 10px;
	margin-top: 10px;
	color: #ffffff;
}
.error {
 color: red;
 }
 .success {
 color: green;
 }
</style>
 <script type="text/javascript">
	function validateForm() {
    var firstname = document.regForm.fname;
	if (firstname.value == "") {
	alert("Please input your firstname");
	name.focus();
    return false;
    }
    if (!isNaN(firstname.value)) {
	alert("Please input only alphabet");
	name.focus();
    return false;
    }
    var lastname = document.regForm.lname;
	if (lastname.value == "") {
	alert("Please input your lasttname");
	name.focus();
    return false;
    }
    if (!isNaN(lastname.value)) {
	alert("Please input only text");
	name.focus();
    return false;
    }
	var email = document.regForm.email;
	if (email.value == "") {
	alert("Please input your email address");
	email.focus();
	return false;
	}
	if (email.value.indexOf("/") > -1)
        {
        alert("/ cannot be in field");
        email.focus() ;          
            return false;
     } 
     if (email.value.indexOf(".") < 0)
        {
           alert(". is missing in field");
           email.focus();
    return false;
    }
    if (email.value.indexOf("@") < 0)
        {
            alert("@ is missing in field");
           email.focus();
            return false;
        }   
    var password = document.regForm.pass;
	if (password.value == "") {
	alert("Password field cannot be empty");
	password.focus();
	return false;
    }
    var cpassword = document.regForm.cpass;
	if (cpassword.value == "") {
	alert("please confirm your password");
	cpassword.focus();
	return false;
	}
	var phone = document.regForm.phone;
	if (phone.value == "" || isNaN(phone.value)) {
	alert("Phone number should be numeric.");
	phone.focus();
	return false;
	}
	if (phone.value.length != 11) {
	alert( "Phone number should be exactly 11 digits.");
	phone.focus();
	return false;
	}
	var gender = document.regForm.gender;
	if ( gender.value == "") {
	alert("Please select your gender");
	return false;
    }
    var country = document.regForm.country;
	if (country.value == "") {
	alert("Please input your country");
	country.focus();
    return false;
    }
	return true;
	}
	</script>

</head>
<body>
<header>
Sign Up
</header>
<?php echo $message; ?>
<div class="form-container">
<form class="formm" action="" method="POST" name="regForm" onsubmit="validateForm()">
	<fieldset>
		<legend>Sign up Form:</legend>
		<label for="firstname">Firstname:</label>
		<input type="text" name="fname" id="fname">
		<br/>
		<label for="lastname">Lastname:</label>
		<input type="text" name="lname" id="lname">
		<br/>
		<label for="email">Email:</label>
		<br>
		<input type="email" name="email" id="email">
		<br/>
		<label for="password">Password:</label>
		<input type="password" name="pass" id="pass">
		<br/>
		<label for="password">Confirm Password:</label>
		<input type="password" name="cpass" id="cpass">
		<br/>
		<label for="phone">Phone Number:</label>
		<input type="number" name="phone" id="phone">
		<br/>
		<label for="gender">Gender:</label>
		<input type="text" name="gender" id="gender">
		<br>
		<label for="country">Country:</label>
		<input type="text" name="country" id="country">
		<br>
		<button type="submit" name="submit">Submit</button>
	</fieldset>
</form>
</div>
</body>
</html>
