
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1 style="text-align: center;">MENU</h1>
	<ul>
		<li>
			<?php
			echo 'Tên tôi là'.' '.$_SESSION['name'];
			?>
			<h3><a href="" title="">Thay đổi thông tin</a></h3>
		</li>
		<li>
			<h2><a href="?controller=manufacture" title="">Manufacture</a></h2>

		</li>
		<li>
			<h2><a href="?controller=product" title="">Product</a></h2>

		</li>
		<li>
			<h2><a href="../controller/LogoutController.php" title="">Đăng xuất</a></h2>

		</li>
	</ul>
</body>
</html>