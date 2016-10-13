<?php

require("../model/classes/Address.php");

class AddressDao{

	public static function parse ($record){

		if($record == null) return null;

		$address = new Address();
		$address->setId($record["id"]);
		$address->setFirst($record["first_name"]);
		$address->setLast($record["last_name"]);
		$address->setEmail($record["email"]);
		$address->setPhone($record["phone"]);
		$address->setAdr1($record["address_1"]);
		$address->setAdr2($record["address_2"]);
		$address->setCity($record["city"]);
		$address->setState($record["state"]);
		$address->setZip($record["zipcode"]);
		$address->setGroup($record["contact_group"]);
		$address->setNotes($record["notes"]);

		return $address;

	}

	public static function parseList ($records){

		if($records == null) return null;

		for($i = 0;$i < sizeof($records);$i++){
			$array[$i] = AddressDao::parse($records[$i]);
		}

		return $array;

	}

	public static function create ($first,$last,$email,$phone,$adr1,$adr2,$city,$state,$zip,$notes,$group){

		$sql = "INSERT INTO addresses (first_name,last_name,email,phone,address_1,address_2,city,state,zipcode,notes,contact_group)
				VALUES ('$first','$last','$email','$phone','$adr1','$adr2','$city','$state','$zip','$notes','$group')";

		ConnectionUtil::executar($sql);

	}

	public static function read (){

		$sql = "SELECT * FROM addresses";

		$result = ConnectionUtil::executarSelect($sql);

		return AddressDao::parseList($result);

	}

	public static function update ($id,$first,$last,$email,$phone,$adr1,$adr2,$city,$state,$zip,$notes,$group){

		$sql = "UPDATE addresses
				SET first_name = '$first', last_name = '$last', email = '$email',
					phone = '$phone', address_1 = '$adr1', address_2 = '$adr2',
					city = '$city', state = '$state', zipcode = '$zip',
					notes = '$notes', contact_group = '$group'
				WHERE id = $id ";

		ConnectionUtil::executar($sql);

	}

	public static function delete ($id){

		$sql = "DELETE FROM addresses WHERE id = $id";
		ConnectionUtil::executar($sql);

	}

	public static function getById ($id){

		$sql = "SELECT * FROM addresses WHERE id = $id";
		$result = ConnectionUtil::executarSelect($sql);
		return AddressDao::parse($result[0]);

	}

}

?>