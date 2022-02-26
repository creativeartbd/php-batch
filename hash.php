<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	
<h2>PHP Hash:</h2>
<?php 
$password = '123456789';
$hash = hash('sha256', $password);
$hash = hash('sha512', $password);

echo strlen( $hash );

echo '<hr/>';

$string = 'I hate You';
echo md5( $string );

echo '<hr/>';

$gf = 'I love You';
$base64 = base64_encode( $gf );
echo $base64;

echo '<hr/>';
echo base64_decode( $base64 );
?>


</body>
</html>