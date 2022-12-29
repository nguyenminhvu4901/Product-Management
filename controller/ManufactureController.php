<?php

require_once ('BaseController.php');
class ManufactureController implements BaseController{

	public function index(){
		require '../config/session.php';
		require '../model/Manufacture.php';
		$arr = (new Manufacture())->all();
		require "../view/manufacture/index.php";
	}

	public function create(){
		require '../config/session.php';
		require '../view/manufacture/create.php';
	}

	public function store(){
		session_start();
		if(empty($_POST['manufacturer_name']) || empty($_POST['manufacturer_address']) || empty($_POST['manufacturer_phone'])) {
			header('Location: index.php');
			exit;
		}
		require '../config/session.php';
		require '../model/Manufacture.php';
		$rs = (new Manufacture())->insert($_POST);
		if($rs === true){
			$_SESSION['manufacture_success_store'] = "Thêm Manufacture thành công";
			header('Location: index.php?controller=manufacture&action=index');
		}else{
			$_SESSION['manufacture_error_store'] = "Thêm Manufacture không thành công";
			header("Location: index.php?controller=manufacture&action=create&error=Vui long nhap lai");
		}
		
	}

	public function update(){
		if(empty($_GET['id_m'])) {
			header('Location: index.php?loi=Bạn cần nhập id để sửa');
			exit;
		}
		require '../config/session.php';
		$id_m = $_GET['id_m'];
		require '../model/Manufacture.php';
		$result = (new Manufacture())->selectId($id_m);
		require '../view/manufacture/update.php';
		
	}

	public function process_update(){
		$id_m = $_GET['id_m'];
		if(empty($_POST['id_m']) || empty($_POST['manufacturer_name']) || empty($_POST['manufacturer_address']) || empty($_POST['manufacturer_phone'])) {
			$_SESSION['manufacture_error_update'] = "Thay đổi Manufacture không thành công";
			header('Location: index.php?loi=Bạn cần nhập id để sửa');
			exit;
		}
		require '../config/session.php';
		require '../model/Manufacture.php';
		$result = (new Manufacture())->update($_POST);
		if($result === true){
			$_SESSION['manufacture_success_update'] = "Thay đổi Manufacture thành công";
			header('Location: index.php?controller=manufacture&action=index&success=Them thanh cong');
		}else{
			$_SESSION['manufacture_error_update'] = "Thay đổi Manufacture không thành công";
			header("Location: index.php?controller=manufacture&action=update&error=Vui long nhap lai");
		}
	}

	public function detail(){
		$id_m = $_GET['id_m'];
		if(empty($_GET['id_m'])){
			header('Location: index.php?loi=Bạn cần nhập id để xóa');
			exit;
		}
		require '../config/session.php';
		$id_m = $_GET['id_m'];
		require '../model/Manufacture.php';
		$result = (new Manufacture())->selectId($id_m);
		require '../view/manufacture/detail.php';
		
	}

	public function delete(){
		$id_m = $_GET['id_m'];
		if(empty($_GET['id_m'])){
			header('Location: index.php?loi=Bạn cần nhập id để xóa');
			exit;
		}
		require '../config/session.php';
		$id_m = $_GET['id_m'];
		require '../model/Manufacture.php';
		$result = (new Manufacture())->delete($id_m);
		print_r($result);
		if($result == false){
			
			header('Location: index.php?controller=manufacture&action=index');
		}else{
			
			
			header("Location: index.php?controller=manufacture&action=index&error=Xoa khong thanh cong");
		}

		
	}
}
?>