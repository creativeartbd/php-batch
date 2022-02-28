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
			<article>
				<h2>Today's News</h2>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi neque illo asperiores repellat vitae eum recusandae consequatur inventore non voluptas, quae voluptatum quis aspernatur expedita facere ipsa veritatis perferendis est!</p>
			</article>
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