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
	<!-- Banner start here -->
	<div class="row">
		<div class="col-md-12">			
			<div class="banner"></div>			
		</div>
	</div>
	<!-- Banner end here -->
	<div class="row">
		<!-- Article start here -->
		<div class="col-md-8">
			<?php
			// Make database connection
			require_once('connection.php');

			// Get the data from the database
			$sql = "SELECT * FROM blog";
			$query = mysqli_query( $connect, $sql );
			while( $results = mysqli_fetch_assoc( $query ) ) {
				$blog_title = $results['blog_title'];	
				$blog_content = $results['blog_content'];	
				$blog_created = $results['created'];	
				$status = $results['status'];	
				?>
				<article>
					<h2><?php echo $blog_title; ?></h2>
					<span>Published on <?php echo $blog_created; ?></span>
					<hr>
					<p><?php echo $blog_content; ?></p>
				</article>
				<?php
			}
			?>			
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