<?php 


class UserController{

	public function index(){
		require'../index.php';
	}

	public function login(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(isset($_POST['remember'])){
			$remember = true;
		}else{
			$remember = false;
		}
		$connect = mysqli_connect('localhost','root','','Product_Manager');
		mysqli_set_charset($connect, 'utf8');

		$sql = "select * from User where username = '$username' and password = '$password' ";

		$rs= mysqli_query($connect, $sql);
		// require '../model/User.php';
		// $rs = (new User())->login($username, $password);
		$num_row = mysqli_num_rows($rs);

		if($num_row == 1 ){
			session_start();
			$each = mysqli_fetch_array($rs);
			$id = $each['id'];
			$_SESSION['id'] = $id;
			$_SESSION['name'] = $each['name'];
			if($remember){
				$token = uniqid('gia_tri_gi_do', true) + time();
				$sql = "update User
				set token = '$token' 
				where id = '$id' ";
				setcookie('remember', $token, time()+ 60 *60 * 24);
			}
			header('location: index.php');
			exit;
		}
		header('location: ../view/user/form_login.php');
		exit;
	}

	public function store(){
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
			header('Location: index.php');
		}else{
			header("Location: ../view/user/form_register.php");
		}
	}

	public function form_update(){
		require '../config/session.php';
		$id = $_GET['id'];
		require '../model/User.php';
		$result = (new User())->selectId($id);
		require'../view/user/form_update_user.php';
	}

	public function process_update(){
		require '../config/session.php';
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
		require '../config/session.php';
		$id = $_GET['id'];
		require '../model/User.php';
		$result = (new User())->selectId($id);
		require '../view/user/detail.php';
	}

	public function logout(){
		require '../config/session.php';
		unset($_SESSION['id']);
		setcookie('remember', null, -1);

		header('location: ../index.php');
	}
}
?>

