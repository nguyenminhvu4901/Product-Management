
<?php
session_start();
if(empty($_SESSION['id'])){
	header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<style type="text/css" media="screen">
	body h2 h3 {
		text-decoration: none;
	}
</style>
<body>
	<h1 style="text-align: center;">MENU</h1>
	<span style="color:red;">
		<?php if(isset($_SESSION['success_update'])){
			echo $_SESSION['success_update'];
			unset($_SESSION['success_update']);
		}else if(isset($_SESSION['error_update'])){
			echo $_SESSION['error_update'];
			unset($_SESSION['error_update']);			
		}else if(isset($_SESSION['success_login'])){
			echo $_SESSION['success_login'];
			unset($_SESSION['success_login']);
		}else if(isset($_SESSION['error_login'])){
			echo $_SESSION['error_login'];
			unset($_SESSION['error_login']);			
		}else if(isset($_SESSION['success_register'])){
			echo $_SESSION['success_register'];
			unset($_SESSION['success_register']);
		}else if(isset($_SESSION['error_register'])){
			echo $_SESSION['error_register'];
			unset($_SESSION['error_register']);			
		}else if(isset($_SESSION['manufacture_error'])){
			echo $_SESSION['manufacture_error'];
			unset($_SESSION['manufacture_error']);			
		}else if(isset($_SESSION['product_error'])){
			echo $_SESSION['product_error'];
			unset($_SESSION['product_error']);			
		}else if(isset($_SESSION['error_change'])){
			echo $_SESSION['error_update'];
			unset($_SESSION['error_update']);			
		}else if(isset($_SESSION['success_change'])){
			echo $_SESSION['success_login'];
			unset($_SESSION['success_login']);
		}
		?>
	</span>
	<br>
	<ul>
		<li>
			
			<?php
			echo 'Tên tôi là'.' '.$_SESSION['name'];
			echo '<br>';
			echo 'id của tôi là'.' '.$_SESSION['id'];
			$id = $_SESSION['id'];
			?>
			<h3><a href="?controller=user&action=update&id=<?php echo $id ?>" title="">Thay đổi thông tin</a></h3>
			<h3><a href="?controller=user&action=detail&id=<?php echo $id ?>" title="">Chi tiết</a></h3>
			<h3><a href="?controller=user&action=change&id=<?php echo $id ?>" title="">Đổi mật khẩu</a></h3>

		</li>
		<li>
			<h2><a href="?controller=manufacture" title="">Manufacture</a></h2>

		</li>
		<li>
			<h2><a href="?controller=product" title="">Product</a></h2>

		</li>
		<li>
			<h2><a href="?controller=user&action=logout" title="">Đăng xuất</a></h2>

		</li>
	</ul>
</body>
</html>