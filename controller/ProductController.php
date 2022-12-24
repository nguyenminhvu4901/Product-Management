<?php
class ProductController{
	public function index(){
		require '../model/Product.php';
		$arr = (new Product())->all();
		require '../view/product/index.php';
	}

	public function create(){
		require '../model/Manufacture.php';
		$names = (new Manufacture())->all();
		require "../view/product/create.php";
	}

	public function store(){
		$product_name = $_POST['product_name'];
		$product_description = $_POST['product_description'];
		$product_price = $_POST['product_price'];
		$product_date = $_POST['product_date'];
		$product_photo = $_FILES['product_photo'];
		$id_manufacturer = $_POST['id_manufacturer'];
		//upload file
		$target_dir = "../controller/photos/";
		//Lay ra duoi file anh
		$file_extension = explode('.', $product_photo['name'])[1];
		$target_file = $target_dir . time(). '.'.$file_extension;
		move_uploaded_file($product_photo["tmp_name"], $target_file);
		require '../model/Product.php';
		$rs = (new Product())->insert($product_name, $product_description, $product_price, $product_date, $target_file, $id_manufacturer);
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
		require '../model/Manufacture.php';
		$names = (new Manufacture())->all();
		require '../view/product/update.php';
		
	}

	public function process_update(){
		$id_p = $_GET['id_p'];
		$product_name = $_POST['product_name'];
		$product_description = $_POST['product_description'];
		$product_price = $_POST['product_price'];
		$product_date = $_POST['product_date'];
		$product_photo = $_FILES['product_photo'];
		if($product_photo['size'] > 0){
		$target_dir = "../controller/photos/";
		//Lay ra duoi file anh
		$file_extension = explode('.', $product_photo['name'])[1];
		$target_file = $target_dir . time(). '.'.$file_extension;
		move_uploaded_file($product_photo["tmp_name"], $target_file);
	}else {
		$target_file = $_POST['product_photo_old'];

	}
		$id_manufacturer = $_POST['id_manufacturer'];
		//upload file
		require '../model/Product.php';
		$result = (new Product())->update($id_p, $product_name, $product_description, $product_price, $product_date, $target_file, $id_manufacturer);
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
		if($result === false){
			header("Location: index.php?controller=product&action=index&error=Xoa khong thanh cong");
		}else{
			header('Location: index.php?controller=product&action=index&success=Xoa thanh cong');
		}
}
}

?>