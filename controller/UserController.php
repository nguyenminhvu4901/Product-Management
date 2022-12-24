<?php 
class UserController{

	public function form_update(){
		$id = $_GET['id'];
		require '../model/User.php';
		$result = (new User())->selectId($id);
		require'../view/user/form_update_user.php';
	}

	public function process_update(){
		$id = $_GET['id'];
		$name = $_POST['name'];
		$birth = $_POST['birth'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$avatar = $_FILES['avatar'];
		$email = $_POST['email'];
		if($avatar['size'] > 0){
		//upload file
			$target_dir = "../controller/avatars/";
		//Lay ra duoi file anh
			$file_extension = explode('.', $avatar['name'])[1];
			$target_file = $target_dir . time(). '.'.$file_extension;
			move_uploaded_file($avatar["tmp_name"], $target_file);
		}else {
			$target_file = $_POST['avatar_old'];

		}
		//upload file
		require '../model/User.php';
		$result = (new User())->update($id, $name, $birth, $gender, $address, $target_file, $email);
		if($result === true){
			header('Location: index.php?controller=base');
		}else{
			header("Location: index.php?controller=user&action=update");
		}
	}
		public function detail(){
		$id = $_GET['id'];
		require '../model/User.php';
		$result = (new User())->selectId($id);
		require '../view/user/detail.php';
	}
}
?>

