<?php 
if(isset($_COOKIE['remember'])){
	$token = $_COOKIE['remember'];
	$connect = mysqli_connect('localhost','root','','Product_Manager');
	mysqli_set_charset($connect, 'utf8');
	$sql = "select * from User where token = '$token' limit 1 ";
	$result = mysqli_query($connect, $sql);
	$num_row = mysqli_num_rows($result);
	if($num_row == 1){
		$each = mysqli_fetch_array($result);
		$_SESSION['id'] = $each['id'];
		$_SESSION['name'] = $each['name'];
	}
	
}
session_start();
if(isset($_SESSION['id'])){
	header('location: ../index.php');
	exit;
}

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="css/style.css">

	<link rel="icon" href="Favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<title>Login</title>
</head>
<body>
	<form action="../index.php?controller=user&action=login" method="post" accept-charset="utf-8">
		<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
			<div class="container">
				<a class="navbar-brand" href="../../index.php">Zũ</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="form_register.php">Register</a>
						</li>
					</ul>

				</div>
			</div>
		</nav>

		<main class="login-form">
			<div class="cotainer">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="card">
							<div class="card-header">Product</div>
							<div class="card-body">
								<form action="" method="">
									<div class="form-group row">
										<label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
										<div class="col-md-6">
											<input type="text" id="username" class="form-control" name="username" >
										</div>
									</div>

									<div class="form-group row">
										<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
										<div class="col-md-6">
											<input type="password" id="password" class="form-control" name="password">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-6 offset-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="remember"> Remember Me
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-6 offset-md-4">
										<button type="submit" class="btn btn-primary">
											<a href="#" style = "color:white; text-decoration: none;">Login</a>
										</button>

										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a  href="form_register.php" style = "color:white; text-decoration: none;">Register</a>

	</main>



</form>



</body>
</html>