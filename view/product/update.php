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
	 <form action="?controller=product&action=process_update&id=<?php echo $result->getIdP() ?>" method="post" enctype="multipart/form-data">
	 	<input type="hidden" name="id_sv" value="<?php echo $result->getIdP() ?>">
		<form action="?controller=product&action=store" method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<input type="hidden" id="id_p name="id_p" value="<?php echo $result->getIdP ?>">
						<label for="product_name" class="form-label">Product name</label>
						<input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $result->getProductName() ?>">
					</div>
					<div class="mb-3">
						<label for="product_description" class="form-label">Description</label>
						<input type="text" class="form-control" id="product_description" name="product_description" value="<?php echo $result->getProductDescription() ?>">
					</div>
					<div class="mb-3">
						<label for="product_price" class="form-label">Price</label>
						<input type="number" class="form-control" id="product_price" name="product_price" value="<?php echo $result->getProductPrice() ?>">
					</div>
				</div>

				<div class="col-md-6">

					<div class="mb-3">
						<label for="product_date" class="form-label">Date</label>
						<input type="date" class="form-control" id="product_date" name="product_date" value="<?php echo $result->getProductDate() ?>">
					</div>
					<div class="mb-3">
					Old Photo
						<img src="<?php echo $result->getProductPhoto() ?>" height='100';>
						<input type="hidden" name="product_photo_old" value="<?php echo $result->getProductPhoto() ?>">
					</div>
					
					<div class="mb-3">
						<label for="product_photo" class="form-label">New Photo</label>
						<input type="file" class="form-control" id="product_photo" name="product_photo">
					</div>
					<div class="mb-3">
						<select name="id_manufacturer">
							<?php foreach($names as $name): ?>
								<option value="<?php echo $name->get_id_m() ?>" <?php if($result->getIdManufacturer() === $name->get_id_m()) echo "selected" ?>>
									<?php echo $name->get_manufacturer_name() ?>
								</option>
							<?php endforeach; ?>
						</select></div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>

					
				</div>
			</div












</form>
</body>
</html>