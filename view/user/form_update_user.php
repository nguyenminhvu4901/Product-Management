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


	<form action="?controller=user&action=process_update&id=<?php echo $result->getId() ?>" method="post" enctype="multipart/form-data">
		<span style="color:red;">
			<?php if(isset($_SESSION['success'])){
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			}else if(isset($_SESSION['error'])){
				echo $_SESSION['error'];
				unset($_SESSION['error']);			
			}?>
		</span>
		<div class="container">
			<div class="row">  	 	
				<div class="col-md-6">
					<input type="hidden" name="id" value="<?php echo $result->getId() ?>">
					<div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input type="text" class="form-control" id="username" name="username" value="<?php echo $result->getUsername() ?>" disabled>
					</div>
					<div class="mb-3">
						<label for="username" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password" value="<?php echo $result->getPassword() ?>" disabled>
					</div>
					<div class="mb-3">
						<label for="username" class="form-label">Name</label>
						<input type="text" class="form-control" id="name" name="name" value="<?php echo $result->getName() ?>">
					</div>
					<div class="mb-3">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gender" value="<?php echo $result->getGender() ?>" <?php if($result->getGender() == "Nam") echo "checked" ?> >
							<label class="form-check-label" for="flexRadioDefault1">
								Male
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gender" value="<?php echo $result->getGender() ?>" <?php if($result->getGender() == "Nữ") echo "checked" ?>>
							<label class="form-check-label" for="flexRadioDefault2">
								Female
							</label>
						</div>
					</div>
					<!-- end div gender -->
				</div>

				<div class="col-md-6">
					<div class="mb-3">
						<label for="birth" class="form-label">Birth</label>
						<input type="date" class="form-control" id="birth" name="birth" value="<?php echo $result->getBirth() ?>">
					</div>
					<div class="mb-3">
						<label for="address" class="form-label">Address</label>
						<input type="text" class="form-control" id="address" name="address" value="<?php echo $result->getAddress() ?>">
					</div>
					<div class="mb-3">
						Old Photo
						<img src="<?php echo '../controller/'.$result->getAvatar() ?>" height='100';>
						<input type="hidden" name="avatar_old" value="<?php echo '../controller/'.$result->getAvatar() ?>">
					</div>
					<div class="mb-3">
						<label for="avatar" class="form-label">New Avatar</label>
						<input type="file" class="form-control" id="avatar" name="avatar">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" value="<?php echo $result->getEmail() ?>">
					</div>

				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			
		</div>

	</div>


</form>
</body>
</html>