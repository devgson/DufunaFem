
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
</style>
 <script type="text/javascript">
	function validateForm() {
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
    var password = document.regForm.password;
	if (password.value == "") {
	alert("Password field cannot be empty");
	password.focus();
	return false;
    }
    return true;
	}
	</script>

</head>
<body>
<header>
Sign In
</header>

<div class="form-container">
<form class="formm" action="signinconnect.php" method="POST" name="regForm" onsubmit="validateForm()">
	<fieldset>
		
		<label for="email">Email:</label>
		<br>
		<input type="email" name="email" id="email">
		<br/>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		<br/>
		<button type="submit" name="submit">Submit</button>
	</fieldset>
</form>
</div>
</body>
</html>
