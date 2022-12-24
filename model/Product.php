<?php
require_once '../config/connect.php';
require_once '../model/ProductObject.php';

class Product{
	public function all(){
		$sql = "select p.*, m.manufacturer_name from product p
		join manufacturer m
		on p.id_manufacturer = m.id_m";
		$result = (new Connect())->select($sql);
		$arr = [];
		foreach ($result as $key) {
			$object = new ProductObject($key);
			$arr[] = $object;
		}
		return $arr;
	}

	public function insert($product_name, $product_description, $product_price, $product_date, $target_file, $id_manufacturer){
		$object = new ProductObject($product_name, $product_description, $product_price, $product_date, $target_file, $id_manufacturer);
		$object->setProductName($product_name);
		$object->setProductDescription($product_description);
		$object->setProductPrice($product_price);
		$object->setProductDate($product_date);
		$object->setProductPhoto($target_file);
		$object->setIdManufacturer($id_manufacturer);
		$sql = "insert into product ( product_name, product_description, product_price, product_date, product_photo, id_manufacturer)
		values ('{$object->getProductName()}', '{$object->getProductDescription()}', '{$object->getProductPrice()}', '{$object->getProductDate()}', '{$object->getProductPhoto()}', '{$object->getIdManufacturer()}'  )";
		$rs = (new Connect())->select($sql);
		return $rs;
	}

	public function selectId($id_p){
		$sql = "select p.*, m.manufacturer_name from product p 
		join manufacturer m
		on p.id_manufacturer = m.id_m and id_p = '$id_p'";
		$result = (new Connect())->select($sql);
		$each = mysqli_fetch_array($result);

		return new ProductObject($each);

	}

	public function update($id_p, $product_name, $product_description, $product_price, $product_date, $target_file, $id_manufacturer){

		$object = new ProductObject($product_name, $product_description, $product_price, $product_date, $target_file, $id_manufacturer);
		$object->setProductName($product_name);
		$object->setProductDescription($product_description);
		$object->setProductPrice($product_price);
		$object->setProductDate($product_date);
		$object->setProductPhoto($target_file);
		$object->setIdManufacturer($id_manufacturer);
		$sql = "Update product set
		product_name = '{$object->getProductName()}',
		product_description= '{$object->getProductDescription()}',
		product_price = '{$object->getProductPrice()}',
		product_date = '{$object->getProductDate()}',
		product_photo= '{$object->getProductPhoto()}',
		id_manufacturer = '{$object->getIdManufacturer()}'
		where id_p = '$id_p'";
		$rs = (new Connect())->select($sql);
		return $rs;
	}

	public function delete($id_p){
		$sql = "delete from product where id_p = '$id_p'";
		$rs = (new Connect())->select($sql);
	}














}




?>