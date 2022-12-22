<?php
class ProductController{
	public function index(){
		require '../model/Product.php';
		$arr = (new Product())->all();
		require '../view/product/index.php';
	}

	public function create(){
		require '../view/product/create.php';
	}

	public function store(){
		require '../model/Product.php';
		$rs = (new Product())->insert($_POST);
		if($rs === true){
			header('Location: index.php?controller=product&action=index&success=Them thanh cong');
		}else{
			header("Location: index.php?controller=product&action=create&error=Vui long nhap lai");
		}
		
	}

	public function update(){
		$id_p = $_GET['id_p'];
		require '../model/Product.php';
		$result = (new Product())->selectId($id_p);
		require '../view/product/update.php';
		
	}

	public function process_update(){
		require '../model/Product.php';
		$result = (new Product())->update($_POST);
		if($result === true){
			header('Location: index.php?controller=product&action=index&success=Them thanh cong');
		}else{
			header("Location: index.php?controller=product&action=update&error=Vui long nhap lai");
		}
	}

	public function detail(){
		$id_p = $_GET['id_p'];
		require '../model/Product.php';
		$result = (new Product())->selectId($id_p);
		require '../view/product/detail.php';
		
	}

	public function delete(){
		$id_p = $_GET['id_p'];
		require '../model/Product.php';
		$result = (new Product())->delete($id_p);
		if($result === true){
			header('Location: index.php?controller=product&action=index&success=Xoa thanh cong');
		}else{
			header("Location: index.php?controller=product&action=index&error=Xoa khong thanh cong");
		}

		
	}
}

?>