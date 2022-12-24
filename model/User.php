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
}
?>