<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
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
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $result->getIdP() ?></td>
	  				<td><?php echo $result->getProductName() ?></td>
	  				<td><?php echo $result->getProductDescription() ?></td>
	  				<td><?php echo $result->getProductPrice() ?>đ</td>
	  				<td><?php echo $result->getProductDate() ?></td>
	  				<td><img src="<?php echo $result->getProductPhoto() ?>" alt="anh-san-pham" style="width: 100px;" /></td>
	  				<td><?php echo $result->getManufacturerName() ?></td>
			</tr>
		</tbody>
	</table>
	<a href="?controller=product&action=index" title="">Product</a>
</body>
</html>