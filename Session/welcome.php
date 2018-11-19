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
    <?php echo "<h3>"."Your Bio:"."</h3>"."<br/>";?>
    <?php echo "Your Firstname:".$_SESSION["firstname"]."<br/>";?>
    <?php echo "Your Lastname:".$_SESSION["lastname"]."<br/>";?>
    <a href="details2.php">Read More</a>
</body>
</html>