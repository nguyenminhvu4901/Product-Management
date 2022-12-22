<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$error = $_GET['error'] ?? '';

	$success = $_GET['success'] ?? '';
	?>
	<span style="color: green;"><?php
	echo $success;
	?></span>
	<span style="color: red;"><?php
	echo $error;
	?></span>
	
	
	<a href="?controller=product&action=create" title="">Add Product</a>
	  	<table border="1">
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