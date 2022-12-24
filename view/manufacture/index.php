<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<a href="?controller=manufacture&action=create" title="">Add Manufacture</a>
	  	<table border="1">
	  		<thead>
	  			<tr>
	  				<th>ID</th>
	  				<th>Name</th>
	  				<th>Address</th>
	  				<th>Phone</th>
	  				<th>Detail</th>
	  				<th>Update</th>
	  				<th>Delete</th>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			<?php foreach($arr as $each) { ?>
	  			<tr>
	  				<td><?php echo $each->get_id_m() ?></td>
	  				<td><?php echo $each->get_manufacturer_name() ?></td>
	  				<td><?php echo $each->get_manufacturer_address() ?></td>
	  				<td><?php echo $each->get_manufacturer_phone() ?></td>
	  				<td><a href="?controller=manufacture&action=detail&id_m=<?php echo $each->get_id_m() ?>" title="">Detail</a></td>
	  				<td><a href="?controller=manufacture&action=update&id_m=<?php echo $each->get_id_m() ?>" title="">Update</a></td>
	  				<td><a href="?controller=manufacture&action=delete&id_m=<?php echo $each->get_id_m() ?>" title="">Delete</a></td>
	  			</tr>
	  		<?php } ?>
	  		</tbody>
	  	</table>
	  	<a href="?controller=base" title="">Menu</a>
</body>
</html>