<?php
class ProductController{
	public function index(){
		require '../config/session.php';
		require '../model/Product.php';
		$arr = (new Product())->all();
		require '../view/product/index.php';
	}

	public function create(){
		require '../config/session.php';
		require '../model/Manufacture.php';
		$names = (new Manufacture())->all();
		require "../view/product/create.php";
	}

	public function store(){
		if(empty($_POST['product_name'])) {
			header('Location: index.php?loi=Bạn cần nhập id để sửa');
			exit;
		}
		require '../config/session.php';
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
			$_SESSION['product_success'] = "Thêm Product thành công";
			header('Location: index.php?controller=product&action=index&success=Them thanh cong');
		}else{
			$_SESSION['product_error'] = "Thêm Product không thành công";
			header("Location: index.php?controller=product&action=create&error=Vui long nhap lai");
		}

	}

	public function update(){
		if(empty($_GET['id_p'])) {
			header('Location: index.php?loi=Bạn cần nhập id để sửa');
			exit;
		}
		require '../config/session.php';
		$id_p = $_GET['id_p'];
		require '../model/Product.php';
		$result = (new Product())->selectId($id_p);
		require '../model/Manufacture.php';
		$names = (new Manufacture())->all();
		require '../view/product/update.php';

	}

	public function process_update(){
		if(empty($_POST['id_p'])) {
			header('Location: index.php?loi=Bạn cần nhập id để sửa');
			exit;
		}
		require '../config/session.php';
		$id_p = $_POST['id_p'];
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
			$_SESSION['product_success'] = "Thay đổi Product thành công";
			header('Location: index.php?controller=product&action=index&success=Them thanh cong');
		}else{
			$_SESSION['product_error'] = "Thay đổi Product không thành công";
			header("Location: index.php?controller=product&action=update&error=Vui long nhap lai");
		}
	}

	public function detail(){
		if(empty($_GET['id_p'])) {
			header('Location: index.php?loi=Bạn cần nhập id để sửa');
			exit;
		}
		require '../config/session.php';
		$id_p = $_GET['id_p'];
		require '../model/Product.php';
		$result = (new Product())->selectId($id_p);
		require '../view/product/detail.php';
	}

	public function delete(){
		if(empty($_GET['id_p'])) {
			header('Location: index.php?loi=Bạn cần nhập id để sửa');
			exit;
		}
		require '../config/session.php';
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