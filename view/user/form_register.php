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


	<form action="../index.php?controller=user&action=store" method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="row">  	 	
				<div class="col-md-6">
					<?php
					if(isset($_GET['loi'])){
						
						?>
						<span style = "color:red;"><?php echo $_GET['loi']?></span>
						<?php 
					}
					?>
					<div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input type="text" class="form-control" id="username" name="username">
					</div>
					<div class="mb-3">
						<label for="username" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="mb-3">
						<label for="username" class="form-label">Name</label>
						<input type="text" class="form-control" id="name" name="name">
					</div>
					<div class="mb-3">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gender" value="Nam">
							<label class="form-check-label" for="flexRadioDefault1">
								Male
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gender" value ="Nữ" >
							<label class="form-check-label" for="flexRadioDefault2">
								Female
							</label>
						</div>
					</div>

				</div>

				<div class="col-md-6">
					<div class="mb-3">
						<label for="birth" class="form-label">Birth</label>
						<input type="date" class="form-control" id="birth" name="birth">
					</div>
					<div class="mb-3">
						<label for="address" class="form-label">Address</label>
						<input type="text" class="form-control" id="address" name="address">
					</div>
					<div class="mb-3">
						<label for="avatar" class="form-label">Avatar</label>
						<input type="file" class="form-control" id="avatar" name="avatar">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>

				</div>

			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>

</form>
</body>
</html>