<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h2>Settings Page</h2>
<h4>Welcome <?php echo $_SESSION['username']; ?></h4>
</body>
</html>