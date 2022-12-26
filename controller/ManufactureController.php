<?php
class ManufactureController{

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
		if(empty($_POST['manufacturer_name']) || empty($_POST['manufacturer_address']) || empty($_POST['manufacturer_phone'])) {
			header('Location: index.php?loi=Bạn cần nhập id để sửa');
			exit;
		}
		require '../config/session.php';
		require '../model/Manufacture.php';
		$rs = (new Manufacture())->insert($_POST);
		if($rs === true){
			header('Location: index.php?controller=manufacture&action=index&success=Them thanh cong');
		}else{
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
			header('Location: index.php?loi=Bạn cần nhập id để sửa');
			exit;
		}
		require '../config/session.php';
		require '../model/Manufacture.php';
		$result = (new Manufacture())->update($_POST);
		if($result === true){
			header('Location: index.php?controller=manufacture&action=index&success=Them thanh cong');
		}else{
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
		if($result === true){
			header('Location: index.php?controller=manufacture&action=index&success=Xoa thanh cong');
		}else{
			header("Location: index.php?controller=manufacture&action=index&error=Xoa khong thanh cong");
		}

		
	}
}
?>