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
	
	<table border="1" class="table table-danger">
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
	<a href="?controller=manufacture&action=index" title="">Manufacture</a>
</body>
</html>