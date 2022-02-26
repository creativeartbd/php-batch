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
	$hash_pass	=	hash( 'sha512', $password );
	$gender 		= isset( $_POST['gender'] ) ? $_POST['gender'] : ''; // Ternary operator
	$country 		= $_POST['country'];
	$file_name	= $_FILES['picture']['name'];	

	if( ! empty( $file_name) ) {
		$explode = explode('.', $file_name);
		$extension = $explode[1];
		$uniqid = uniqid();
		$final_file_name = $uniqid . '.' . $extension;
	}

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

		// require 
		// require_once
		// include 
		// include_once

		require_once('connection.php');

		// INSERT, UPDATE, SELECT, DELETE

		// Insert form data to the database table called "students"
		// sql query
		// Y-m-d H:m
		$date = date('Y-m-d H:m');

		$query = "INSERT INTO students( fullname, email, password, gender, country, picture, joined ) VALUES( '$fullname', '$email', '$hash_pass', '$gender', '$country', '$final_file_name', '$date' )";

		if( mysqli_query( $connect, $query ) ) {

			echo "Successfully Submitted. <br/>";

			// PHP OOP - Object Orinted Programing 
			// PDO - PHP Data Object
			// Procedural

			// mysql -- old
			// mysqli -- new
			// i -- improve 

			session_start();
			$_SESSION['fullname'] =  $fullname;
			$_SESSION['email'] = $email;
			//header("Location:profile.php");
			header("refresh:5; url=profile.php");
			exit();
		} else {
			echo msyqli_error($connect);
			echo '<hr/>';
			echo 'Opps! Something wen\'t wrong, Please contact Sharif Vhai Administrator.';
		}		
	}
}

?>