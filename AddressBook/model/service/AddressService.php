<?php

require("../model/dao/AddressDao.php");

class AddressService{

	public static function create ($first,$last,$email,$phone,$adr1,$adr2,$city,$state,$zip,$notes,$group){
		return AddressDao::create($first,$last,$email,$phone,$adr1,$adr2,$city,$state,$zip,$notes,$group);
	}

	public static function read (){
		return AddressDao::read();
	}

	public static function update ($id,$first,$last,$email,$phone,$adr1,$adr2,$city,$state,$zip,$notes,$group){
		return AddressDao::update($id,$first,$last,$email,$phone,$adr1,$adr2,$city,$state,$zip,$notes,$group);
	}

	public static function delete ($id){
		return AddressDao::delete($id);
	}

	public static function getById ($id){
		return AddressDao::getById($id);
	}

}

?>