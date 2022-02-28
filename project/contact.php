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
			<h2>Contact Us</h2>
			<form action="">
				<table class="table table-bordered">
					<tr>
						<td>
							<input type="text" name="subject" placeholder="Enter your subject" class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							<textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="Send Message" class="btn btn-success">
						</td>
					</tr>
				</table>
			</form>
		</div>
		<!-- Article end here -->
		<!-- Sidebar start here -->
		<div class="col-md-4">
			<form action="">
				<table class="table">
					<tr>
						<td><input type="text" name="username" placeholder="Enter your username" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Enter your password" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="submit" class="btn btn-primary"></td>
					</tr>
				</table>
			</form>
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