<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<h2>Explode Tutorial</h2>

<?php 
$file_name = "02_Internet-of-things-IOT-by-Davis-M-Onsakia_ISOC-IoT-SIG.pptx";
$explode = explode('.', $file_name);
$extension = $explode[1];
$uniqid = uniqid();
$final_file_name = $uniqid . '.' . $extension;

echo strlen( $final_file_name );
?>

</body>
</html>