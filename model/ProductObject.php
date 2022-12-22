<?php
	class ProductObject{
		private $id_p;
		private $product_name;
		private $product_description;
		private $product_price;
		private $product_date;
		private $product_photo;
		private $id_manufacturer;
		private $manufacturer_name;


		public function __construct($row)
	{	
		// $this->id = '';
		// if(isset($_POST['id'])){
		// 	$this->id = $row['id'];
		// }
		$this->id_p = $row['id_p'] ?? '';
		$this->product_name = $row['product_name'] ?? '';
		$this->product_description = $row['product_description'] ?? '';
		$this->product_price = $row['product_price'] ?? '';
		$this->product_date= $row['product_date'] ?? '';
		$this->product_photo = $row['product_photo'] ?? '';
		$this->id_manufacturer = $row['id_manufacturer'] ?? '';
		$this->manufacturer_name= $row['manufacturer_name'] ?? '';
	}

    /**
     * @return mixed
     */
    public function getIdP()
    {
        return $this->id_p;
    }

    /**
     * @param mixed $id_p
     *
     * @return self
     */
    public function setIdP($id_p)
    {
        $this->id_p = $id_p;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductDescription()
    {
        return $this->product_description;
    }

    /**
     * @param mixed $product_description
     *
     * @return self
     */
    public function setProductDescription($product_description)
    {
        $this->product_description = $product_description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->product_price;
    }

    /**
     * @param mixed $product_price
     *
     * @return self
     */
    public function setProductPrice($product_price)
    {
        $this->product_price = $product_price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductDate()
    {
        return $this->product_date;
    }

    /**
     * @param mixed $product_date
     *
     * @return self
     */
    public function setProductDate($product_date)
    {
        $this->product_date = $product_date;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductPhoto()
    {
        return $this->product_photo;
    }

    /**
     * @param mixed $product_photo
     *
     * @return self
     */
    public function setProductPhoto($product_photo)
    {
        $this->product_photo = $product_photo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdManufacturer()
    {
        return $this->id_manufacturer;
    }

    /**
     * @param mixed $id_manufacturer
     *
     * @return self
     */
    public function setIdManufacturer($id_manufacturer)
    {
        $this->id_manufacturer = $id_manufacturer;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getManufacturerName()
    {
        return $this->manufacturer_name;
    }

    /**
     * @param mixed $manufacturer_name
     *
     * @return self
     */
    public function setManufacturerName($manufacturer_name)
    {
        $this->manufacturer_name = $manufacturer_name;

        return $this;
    }
}

?>

	
  