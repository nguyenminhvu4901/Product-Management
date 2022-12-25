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
				<th>Username</th>
				<th>Name</th>
				<th>Birth</th>
				<th>Gender</th>
				<th>Address</th>
				<th>Avatar</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $result->getId() ?></td>
	  				<td><?php echo $result->getUsername() ?></td>
	  				<td><?php echo $result->getName() ?></td>
	  				<td><?php echo $result->getBirth() ?></td>
	  				<td><?php echo $result->getGender() ?></td>
	  				<td><?php echo $result->getAddress() ?></td>
	  				<td><img src="<?php echo $result->getAvatar() ?>" alt="avatar" style="width: 100px;" /></td>
	  				<td><?php echo $result->getEmail() ?></td>
			</tr>
		</tbody>
	</table>
	<a href="?controller=base" title="">Menu</a>
</body>
</html>