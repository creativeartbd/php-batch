<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h2>We are learning PHP Session</h2>
<?php
$_SESSION['username'] = "Obama";
$_SESSION['email'] = "Obama@gmail.com";
echo $_SESSION['username'];
?>	
</body>
</html>