<?php
require 'UserObject.php';
require '../config/connect.php';
class User{
	public function insert($username, $password, $name, $birth, $gender, $address, $target_file, $email){
		$object = new UserObject($username, $password, $name, $birth, $gender, $address, $target_file, $email);
		$object->setUsername($username);
		$object->setPassword($password);
		$object->setName($name);
		$object->setBirth($birth);
		$object->setGender($gender);
		$object->setAddress($address);
		$object->setAvatar($target_file);
		$object->setEmail($email);

		$sql = "insert into User ( username, password, name, birth, gender, address, avatar, email)
		values ('{$object->getUsername()}', '{$object->getPassword()}', '{$object->getName()}', '{$object->getBirth()}', '{$object->getGender()}', '{$object->getAddress()}', '{$object->getAvatar()}', '{$object->getEmail()}') ";
		$rs = (new Connect())->select($sql);
		return $rs;

	}

	public function login($username, $password){
		$object = new UserObject($username, $password);
		$object->setUsername($username);
		$object->setPassword($password);

		$sql = "select * from User where username = '$username' and password = '$password' ";
		$rs = (new Connect())->select($sql);
		$num_row = mysqli_num_rows($rs);
		return $num_row;
	}



	// public function update_token($id, $token){
	// 	$object = new UserObject($id $token);
	// 	$object->setId($id);
	// 	$object->setToken($token);
	// 	$sql = "update User
	// 	set token = '$token' 
	// 	where id = '$id' ";
	// 	(new Connect())->execute($sql);
	// }
}
?>