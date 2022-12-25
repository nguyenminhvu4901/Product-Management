
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
</head>
<style type="text/css" media="screen">
	body h2 h3 {
		text-decoration: none;
	}
</style>
<body>
	<h1 style="text-align: center;">MENU</h1>
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