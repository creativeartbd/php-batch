<?php

// echo '<pre>';
// print_r( $_POST );
// echo '</pre>';


$fullname 	= $_POST['fullname'];
$email 			= $_POST['email'];
$password 	= $_POST['password'];
$gender 		= $_POST['gender'];
$country 		= $_POST['country'];

// echo "My name is $fullname and My email address is $email and my password is $password and my gender is $gender and my country name $country";

// echo "My name is $fullname " . " My email addres is $email " . " My password is $password"; 

echo '<pre>';
	print_r( $_FILES );
echo '</pre>';

?>