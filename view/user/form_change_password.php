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
	
	<form action="?controller=user&action=process_change" method="post" enctype="multipart/form-data">
		<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id ?>">
		<div class="container">
			<div class="mb-3">
				<label for="old_pass" class="form-label">Enter old pasword</label>
				<input type="password" class="form-control" id="old_pass" name="old_pass">
			</div>
			<div class="mb-3">
				<label for="new_pass" class="form-label">Enter New Password</label>
				<input type="password" class="form-control" id="new_pass" name="new_pass">
			</div>
			<div class="mb-3">
				<label for="re_new_pass" class="form-label">Re-Enter new password</label>
				<input type="password" class="form-control" id="re_new_pass" name="re_new_pass">
			</div>
			<button type="submit" class="btn btn-primary">Change</button>
		</div>

	</form>
</body>
</html>