<?php
class UserObject{
	private $id;
	private $username;
	private $password;
	private $name;
	private $birth;
	private $gender;
	private $address;
	private $avatar;
	private $email;

	public function __construct($row){
		$this->id = $row['id'] ?? '';
		$this->username= $row['username'] ?? '';
		$this->password = $row['password'] ?? '';
		$this->name = $row['name'] ?? '';
		$this->birth = $row['birth'] ?? '';
		$this->gender= $row['gender'] ?? '';
		$this->address = $row['address'] ?? '';
		$this->avatar = $row['avatar'] ?? '';
		$this->email = $row['email'] ?? '';
	}

	
    /**
     * @return mixed
     */
    public function getId()
    {
    	return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
    	$this->id = $id;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
    	return $this->username;
    }

    /**
     * @param mixed $username
     *
     * @return self
     */
    public function setUsername($username)
    {
    	$this->username = $username;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
    	return $this->password;
    }

    /**
     * @param mixed $password
     *
     * @return self
     */
    public function setPassword($password)
    {
    	$this->password = $password;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
    	return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
    	$this->name = $name;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getBirth()
    {
    	return $this->birth;
    }

    /**
     * @param mixed $birth
     *
     * @return self
     */
    public function setBirth($birth)
    {
    	$this->birth = $birth;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
    	return $this->gender;
    }

    /**
     * @param mixed $gender
     *
     * @return self
     */
    public function setGender($gender)
    {
    	$this->gender = $gender;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
    	return $this->address;
    }

    /**
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address)
    {
    	$this->address = $address;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
    	return $this->avatar;
    }

    /**
     * @param mixed $avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
    	$this->avatar = $avatar;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
    	return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
    	$this->email = $email;

    	return $this;
    }
}
?>