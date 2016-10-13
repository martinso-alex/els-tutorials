<?php

class Address{

	private $id;
	private $first;
	private $last;
	private $email;
	private $phone;
	private $adr1;
	private $adr2;
	private $city;
	private $state;
	private $zip;
	private $group;
	private $notes;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getFirst(){
		return $this->first;
	}

	public function setFirst($first){
		$this->first = $first;
	}

	public function getLast(){
		return $this->last;
	}

	public function setLast($last){
		$this->last = $last;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone = $phone;
	}

	public function getAdr1(){
		return $this->adr1;
	}

	public function setAdr1($adr1){
		$this->adr1 = $adr1;
	}

	public function getAdr2(){
		return $this->adr2;
	}

	public function setAdr2($adr2){
		$this->adr2 = $adr2;
	}

	public function getCity(){
		return $this->city;
	}

	public function setCity($city){
		$this->city = $city;
	}

	public function getState(){
		return $this->state;
	}

	public function setState($state){
		$this->state = $state;
	}

	public function getZip(){
		return $this->zip;
	}

	public function setZip($zip){
		$this->zip = $zip;
	}

	public function getGroup(){
		return $this->group;
	}

	public function setGroup($group){
		$this->group = $group;
	}

	public function getNotes(){
		return $this->notes;
	}

	public function setNotes($notes){
		$this->notes = $notes;
	}

}

?>