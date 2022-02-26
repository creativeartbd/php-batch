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
		echo "All fields are required <br/>";
	} else {

		// Full Name validation
		if( empty( $fullname ) ) {
			echo "Full name is required <br/>";
		}

		// Email address validation
		if( empty(  $email ) ) {
			echo "Email address is required <br/>";
		}

		// Pasword Validation
		if( empty( $password ) ) {
			echo "Password is required <br/>";
		}

		// Gender validation
		if( empty( $gender) ) {
			echo "Please choose your gender <br/>";
		}

		// Country Validation
		if( empty( $country) ) {
			echo "Please choose your country <br/>";
		}

		// File validation
		if( empty( $file_name ) ) {
			echo "Plese choose file name <br/>";
		}
	}

	if( !empty( $fullname ) && !empty( $email ) && !empty( $password ) && !empty( $gender ) && !empty( $country ) && !empty( $file_name ) ) {
		// Insert form data to the database.
		echo "Successfully Submitted. <br/>";

		session_start();
		$_SESSION['fullname'] =  $fullname;
		$_SESSION['email'] = $email;
		//header("Location:profile.php");
		header("refresh:5; url=profile.php");
		exit();
	}
}

?>