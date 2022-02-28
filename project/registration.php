<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project on 28th February</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php require_once('navbar.php'); ?>

<div class="container">	
	<div class="row">
		<!-- Article start here -->
		<div class="col-md-8">
			<?php if( !isset( $_SESSION['email'] ) ) : ?>
				
			<h2>Add a new student</h2>
			<?php 
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
					echo "<div class='alert alert-danger'>All fields are required </div>";
				} else {

					// Full Name validation
					if( empty( $fullname ) ) {
						echo "<div class='alert alert-danger'>Full name is required </div>";
					}

					// Email address validation
					if( empty(  $email ) ) {
						echo "<div class='alert alert-danger'>Email address is required </div>";
					}

					// Pasword Validation
					if( empty( $password ) ) {
						echo "<div class='alert alert-danger'>Password is required </div>";
					}

					// Gender validation
					if( empty( $gender) ) {
						echo "<div class='alert alert-danger'>Please choose your gender </div>";
					}

					// Country Validation
					if( empty( $country) ) {
						echo "<div class='alert alert-danger'>Please choose your country </div>";
					}

					// File validation
					if( empty( $file_name ) ) {
						echo "<div class='alert alert-danger'>Plese choose file name </div>";
					}
				}

				if( !empty( $fullname ) && !empty( $email ) && !empty( $password ) && !empty( $gender ) && !empty( $country ) && !empty( $file_name ) ) {
					
					require_once('connection.php');
					$date = date('Y-m-d H:m');

					$query = "INSERT INTO students( fullname, email, password, gender, country, picture, joined ) VALUES( '$fullname', '$email', '$hash_pass', '$gender', '$country', '$final_file_name', '$date' )";

					if( mysqli_query( $connect, $query ) ) {

						echo "<div class='alert alert-success'>Successfully registered. Please wait for your account activation </div><br/>";

					} else {
						echo mysqli_error($connect);
						echo '<hr/>';
						echo 'Opps! Something wen\'t wrong, Please contact Sharif Vhai Administrator.';
					}		
				}
			}
			?>
			
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
			  <table class="table table-bordered">
			    <tr>
			      <td>Your Full Name</td>
			      <td><input type="text" name="fullname" /></td>
			    </tr>
			    <tr>
			      <td>Your Email Address</td>
			      <td><input type="email" name="email" /></td>
			    </tr>
			    <tr>
			      <td>Your Password</td>
			      <td><input type="password" name="password" /></td>
			    </tr>
			    <tr>
			      <td>Your Gender</td>
			      <td>
			        <input type="radio" name="gender" value="male" />Male
			        <input type="radio" name="gender" value="female" />Female
			      </td>
			    </tr>
			    <tr>
			      <td>Your Country</td>
			      <td>
			        <select name="country">
			          <option value="">--Select Country---</option>
			          <option value="bangladesh">Bangladesh</option>
			          <option value="american">America</option>
			          <option value="canada">Canada</option>
			        </select>
			      </td>
			    </tr>
			    <tr>
			      <td>Your Profile Picture</td>
			      <td><input type="file" name="picture" /></td>
			    </tr>
			    <tr>      
			      <td align="right" colspan="2">
			        <input type="submit" name="submit" value="registration"/>
			      </td>
			    </tr>
			  </table>
			</form>
			<?php endif; ?>
		</div>
		<!-- Article end here -->
		<!-- Sidebar start here -->
		<div class="col-md-4">
			<?php require_once('sidebar.php'); ?>
		</div>
		<!-- Sidebar end here -->
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>All right reserved by Sohel Vhai.</p>
		</div>
	</div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>