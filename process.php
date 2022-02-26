<?php

// echo '<pre>';
// print_r( $_POST );
// echo '</pre>';




// echo "My name is $fullname and My email address is $email and my password is $password and my gender is $gender and my country name $country";

// echo "My name is $fullname " . " My email addres is $email " . " My password is $password"; 

// echo '<pre>';
// 	print_r( $_FILES );
// echo '</pre>';

// echo $_FILES['picture']['type'];

if( isset( $_POST['submit'] ) && $_POST['submit'] == 'registration' ) {

	$fullname 	= $_POST['fullname'];
	$email 			= $_POST['email'];
	$password 	= $_POST['password'];
	$gender 		= isset( $_POST['gender'] ) ? $_POST['gender'] : ''; // Ternary operator
	$country 		= $_POST['country'];
	$file_name	= $_FILES['picture']['name'];	

	if( empty( $fullname ) && empty( $email ) && empty( $password ) && empty( $gender ) && empty( $country ) && empty( $file_name ) ) {
		echo "All fields are required";
	} else {
		if( empty( $fullname ) ) {
			echo "Full name is required";
		}
	}
}

?>