<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php echo "<h1>"."Welcome"."</h1>"."<br/>";?>
    <?php echo "<h3>"."More Elaborate Bio"."</h3>"."<br/>";?>
    <?php echo "Your Email is:" .$_SESSION["email"]."<br/>";?>
    <?php echo "Your Gender is:" .$_SESSION["gender"]."<br/>";?>
    <?php echo"Your Phone is:" .$_SESSION["phone"]."<br/>";?>
    <?php echo "Your Country is:". $_SESSION["country"]."<br/>";?>
  
</body>
</html>