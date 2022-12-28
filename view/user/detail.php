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
	<span style="color:red;">
			<?php if(isset($_SESSION['success'])){
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			}else if(isset($_SESSION['error'])){
				echo $_SESSION['error'];
				unset($_SESSION['error']);			
			}?>
		</span>
	<table class="table table-danger" border="1">
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