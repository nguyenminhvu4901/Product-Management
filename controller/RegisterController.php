<?php
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name= $_POST['name'];
		$birth = $_POST['birth'];
		$gender = $_POST['gender'];
		$address= $_POST['address'];
		$avatar = $_FILES['avatar'];
		$email = $_POST['email'];
		//upload file
		$target_dir = "avatars/";
		//Lay ra duoi file anh
		$file_extension = explode('.', $avatar['name'])[1];
		$target_file = $target_dir . time(). '.'.$file_extension;
		move_uploaded_file($avatar["tmp_name"], $target_file);
		require '../model/User.php';
		$rs = (new User())->insert($username, $password, $name, $birth, $gender, $address, $target_file, $email);
		if($rs === true){
			header('Location: ../index.php');
		}else{
			header("Location: ../view/user/form_register.php");
		}
?>