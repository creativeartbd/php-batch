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
			<?php 
			require_once('connection.php');
			$page_id = $_GET['page_id'];
			$sql = "SELECT * FROM pages WHERE page_id = $page_id";
			$query = mysqli_query( $connect, $sql );
			$result = mysqli_fetch_assoc( $query );
			$page_name = $result['page_name'];
			$page_content = $result['page_content'];
			?>
			
			<h2><?php echo $page_name; ?></h2>
			<p><?php echo $page_content; ?></p>
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