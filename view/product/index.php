<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
<a href="?controller=product&action=create" title="">Add Product</a>
<span style="color:red;">
	<?php if(isset($_SESSION['product_success_store'])){
		echo $_SESSION['product_success_store'];
		unset($_SESSION['product_success_store']);
	}else if(isset($_SESSION['product_error_store'])){
		echo $_SESSION['product_error_store'];
		unset($_SESSION['product_error_store']);			
	}
	else if(isset($_SESSION['product_success_update'])){
		echo $_SESSION['product_success_update'];
		unset($_SESSION['product_success_update']);			
	}
	else if(isset($_SESSION['product_error_update'])){
		echo $_SESSION['product_error_update'];
		unset($_SESSION['product_error_update']);			
	}?>
</span>
<table border="1" class="table table-danger">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>price</th>
			<th>Date</th>
			<th>Photo</th>
			<th>Name of Manufacturer</th>
			<th>Detail</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<? foreach($arr as $each) { ?>
			<tr>
				<td><?php echo $each->getIdP() ?></td>
				<td><?php echo $each->getProductName() ?></td>
				<td><?php echo $each->getProductDescription() ?></td>
				<td><?php echo $each->getProductPrice() ?>đ</td>
				<td><?php echo $each->getProductDate() ?></td>
				<td><img src="<?php echo $each->getProductPhoto() ?>" alt="anh-san-pham" style="width: 100px;" /></td>
				<td><?php echo $each->getManufacturerName() ?></td>
				<td><a href="?controller=product&action=detail&id_p=<?php echo $each->getIdP() ?>" title="">Detail</a></td>
				<td><a href="?controller=product&action=update&id_p=<?php echo $each->getIdP() ?>" title="">Update</a></td>
				<td><a href="?controller=product&action=delete&id_p=<?php echo $each->getIdP() ?>" title="">Delete</a></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<a href="?controller=base" title="">Menu</a>
</body>
</html>