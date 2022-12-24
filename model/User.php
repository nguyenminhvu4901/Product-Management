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

	public function selectId($id){
		$sql = "select * from User
		where id = '$id' ";
		$result = (new Connect())->select($sql);
		$each = mysqli_fetch_array($result);

		return new UserObject($each);

	}

	public function update($id, $name, $birth, $gender, $address, $target_file, $email){
		$object = new UserObject($id, $name, $birth, $gender, $address, $target_file, $email);
		$object->setId($id);
		$object->setName($name);
		$object->setBirth($birth);
		$object->setGender($gender);
		$object->setAddress($address);
		$object->setAvatar($target_file);
		$object->setEmail($email);

		$sql = "Update User set
		name = '{$object->getName()}',
		birth = '{$object->getBirth()}',
		gender = '{$object->getGender()}',
		address = '{$object->getAddress()}',
		avatar = '{$object->getAvatar()}',
		email = '{$object->getEmail()}'
		where id = '{$object->getId()}'";
		$rs = (new Connect())->select($sql);
		return $rs;
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