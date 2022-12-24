<?php
	// $username = $_POST['username'];
	// $password = $_POST['password'];
	// if(isset($_POST['remember'])){
	// 	$remember = true;
	// }else{
	// 	$remember = false;
	// }
	// $num_row = (new User())->login($username, $password);
	// if($num_row == 1 ){
	// 	session_start();
	// 	$each = mysqli_fetch_array($result);
	// 	$id = $each['id'];
	// 	$_SESSION['id'] = $id;
	// 	$_SESSION['name'] = $each['name'];
	// 	if($remember){
	// 		$token = uniqid('gia_tri_gi_do', true) + time();
	// 		$num_row = (new User())->update_token($id, $token);
	// 		setcookie('remember', $token, time()+ 60 *60 * 24);
	// 	}
	// 	header('location: ../view/index.php');
	// 	exit;
	// }
	// header('location: ./view/user/form_login.php');
	// 	exit;

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
	header('location: ../view/index.php');
	exit;
}
header('location: ../view/user/form_login.php');
exit;
?>