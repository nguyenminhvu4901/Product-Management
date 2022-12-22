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
	  				<th>Address</th>
	  				<th>Phone</th>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			<tr>
	  				<td><?php echo $result->get_id_m() ?></td>
	  				<td><?php echo $result->get_manufacturer_name() ?></td>
	  				<td><?php echo $result->get_manufacturer_address() ?></td>
	  				<td><?php echo $result->get_manufacturer_phone() ?></td>
	  			</tr>
	  		</tbody>
	  	</table>
	  	
</body>
</html>