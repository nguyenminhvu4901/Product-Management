<?php
class ManufactureObject{
	private $id_m;
	private $manufacturer_name;
	private $manufacturer_address;
	private $manufacturer_phone;

	public function __construct($row)
	{	
		// $this->id = '';
		// if(isset($_POST['id'])){
		// 	$this->id = $row['id'];
		// }
		$this->id_m = $row['id_m'] ?? '';
		$this->manufacturer_name = $row['manufacturer_name'] ?? '';
		$this->manufacturer_address = $row['manufacturer_address'] ?? '';
		$this->manufacturer_phone = $row['manufacturer_phone'] ?? '';
	}

	public function get_id_m(){
		return $this->id_m;
	}

	public function set_id_m($var){
		$this->id_m = $var;
	}

	public function get_manufacturer_name(){
		return $this->manufacturer_name;
	}

	public function set_manufacturer_name($var){
		$this->manufacturer_name  = $var;
	}

	public function get_manufacturer_address(){
		return $this->manufacturer_address;
	}

	public function set_manufacturer_address($var){
		$this->manufacturer_address = $var;
	}

	public function get_manufacturer_phone(){
		return $this->manufacturer_phone;
	}

	public function set_manufacturer_phone($var){
		$this->manufacturer_phone= $var;
	}

}

?>