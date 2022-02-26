<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h2>This is a profile page</h2>
<h4>Welcome <?php echo $_SESSION['username']; ?></h4>
<h4>You email address is <?php echo $_SESSION['email']; ?></h4>
</body>
</html>