<?php
class User {
	public $firstname;
	public $lastname;
	public $address;
	public $zipcode;
	public $city;
	public $country;
	public $email;

	public function __construct()
	{
		$this->firstname = "-";
		$this->lastname = "-";
		$this->address = "Vejnavn Nr";
		$this->zipcode = 0;
		$this->city = "--";
		$this->country = "DK";
		$this->email = "-@-.-";
	}

	public function setData($firstname, $lastname, $address, $zipcode, $city, $country, $email)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->address = $address;
		$this->zipcode = $zipcode;
		$this->city = $city;
		$this->country = $country;
		$this->email = $email;
	}

	public function getFullName() {
		return "<p><b>$this->firstname $this->lastname</b></p>";
	}

	public function getFullAddress() {
		return "<p>$this->address<br />
				$this->zipcode $this->city<br />
				$this->country</p>";

	}

	public function getUserInfo() {
		return $this->getFullName() . 
				$this->getFullAddress();
	}

}