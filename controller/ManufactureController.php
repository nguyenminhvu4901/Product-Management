<?php
class ManufactureController{

	public function index(){
		require '../model/Manufacture.php';
		$arr = (new Manufacture())->all();
		require '../view/manufacture/index.php';
	}

	public function create(){
		require '../view/manufacture/create.php';
	}

	public function store(){

		require '../model/Manufacture.php';
		$rs = (new Manufacture())->insert($_POST);
		if($rs === true){
			header('Location: index.php?controller=manufacture&action=index&success=Them thanh cong');
		}else{
			header("Location: index.php?controller=manufacture&action=create&error=Vui long nhap lai");
		}
		
	}

	public function update(){
		$id_m = $_GET['id_m'];
		require '../model/Manufacture.php';
		$result = (new Manufacture())->selectId($id_m);
		require '../view/manufacture/update.php';
		
	}

	public function process_update(){
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
		require '../model/Manufacture.php';
		$result = (new Manufacture())->selectId($id_m);
		require '../view/manufacture/detail.php';
		
	}

	public function delete(){
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