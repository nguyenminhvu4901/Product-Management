<?php
require_once '../config/connect.php';
require_once '../model/ManufactureObject.php';

class Manufacture{
	public function all(){
		$sql = 'select * from manufacturer';
		$result = (new Connect())->select($sql);
		$arr = [];
		foreach ($result as $key) {
			$object = new ManufactureObject($key);

			$arr[] = $object;
		}
		return $arr;
	}


	public function insert($params){
		$object = new ManufactureObject($params);
		$sql = "insert into manufacturer ( manufacturer_name, manufacturer_address, manufacturer_phone)
		values ('{$object->get_manufacturer_name()}', '{$object->get_manufacturer_address()}', '{$object->get_manufacturer_phone()}')";
		$rs = (new Connect())->select($sql);
		return $rs;

	}

	public function selectId($id_m){
		$sql = "select * from manufacturer where id_m = '$id_m' ";
		$result = (new Connect())->select($sql);
		$each = mysqli_fetch_array($result);

		return new ManufactureObject($each);

	}

	public function update($params){
		$object = new ManufactureObject($params);
		$sql = "update manufacturer set
		manufacturer_name = '{$object->get_manufacturer_name()}',
		manufacturer_address = '{$object->get_manufacturer_address()}',
		manufacturer_phone = '{$object->get_manufacturer_phone()}'
		where id_m = '{$object->get_id_m()}' ";
		$rs = (new Connect())->select($sql);
		return $rs;
	}

	public function delete($id_m){
		$sql = "delete from manufacturer where id_m = '$id_m'";
		$rs = (new Connect())->select($sql);
	}














}




?>