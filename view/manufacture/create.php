<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
	<h1 style="text-align:center; color:red;">ADD MANUFACTURER</h1>

	<form action="?controller=manufacture&action=store" method="post" enctype="multipart/form-data">
		<div class="container">
					<?php
					if(isset($_GET['loi'])){
						?>
						<span style = "color:red;"><?php echo $_GET['loi']?></span>
						<?php 
					}
					?>
					<div class="mb-3">
						<label for="manufacturer_name" class="form-label">Name</label>
						<input type="text" class="form-control" id="manufacturer_name" name="manufacturer_name">
					</div>
					<div class="mb-3">
						<label for="manufacturer_address" class="form-label">Address</label>
						<input type="text" class="form-control" id="manufacturer_address" name="manufacturer_address">
					</div>
					<div class="mb-3">
						<label for="manufacturer_phone" class="form-label">Phone</label>
						<input type="number" class="form-control" id="manufacturer_phone" name="manufacturer_phone">
					</div>

				
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>

</form>
</body>
</html>