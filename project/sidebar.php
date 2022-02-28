<?php 
if( isset( $_POST['submit'] ) && $_POST['submit'] == 'Login' ) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hash			=	hash('sha512', $password);

	require_once( 'connection.php' );

	$check_sql	=	"SELECT email, password FROM students WHERE email = '$email' AND password = '$hash' ";
	$check_query = mysqli_query( $connect, $check_sql );
	$found 	= mysqli_num_rows( $check_query );

	if( empty( $email ) && empty( $password) ) {
		echo '<div class="alert alert-danger">All fields are required</div>';
	} else {
		if( empty( $email) ) {
			echo '<div class="alert alert-danger">Please enter your email addresss</div>';
		} elseif( empty( $password) ) {
			echo '<div class="alert alert-danger">Please enter your password</div>';
		} elseif( $found !== 1 ) {
			echo '<div class="alert alert-danger">Either username or password is incorrect</div>';
		}
	}

	if( $found == 1 ) {
		echo '<div class="alert alert-success">Successfully Logged</div>';		
		$_SESSION['email'] = $email;
		header("refresh:4;url:admin/index.php");
		exit();
	}	
}
?>

<?php if( ! isset( $_SESSION['email'] ) ) : ?>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<table class="table table-bordered">
			<tr>
				<td><input type="text" name="email" placeholder="Enter your email" class="form-control" value="<?php if( isset( $_POST['email'] ) ) echo $_POST['email']; ?>"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Enter your password" class="form-control"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" class="btn btn-primary" value="Login"></td>
			</tr>
		</table>
	</form>

<?php endif; ?>