<?php
require("../model/ConnectionUtil.php");
require("../model/service/AddressService.php");
require("../view/AddressView.php");

$func = $_POST['func'];

switch($func){

	case 'read':

		$contacts = AddressService::read();
		AddressView::showContacts($contacts);

	break;

	case 'create':

		$first = $_POST['first'];
		$last  = $_POST['last'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$adr1  = $_POST['adr1'];
		$adr2  = $_POST['adr2'];
		$city  = $_POST['city'];
		$state = $_POST['state'];
		$zip   = $_POST['zip'];
		$notes = $_POST['notes'];
		$group = $_POST['group'];

		AddressService::create($first,$last,$email,$phone,$adr1,$adr2,$city,$state,$zip,$notes,$group);
		$contacts = AddressService::read();
		AddressView::showContacts($contacts);

	break;

	case 'delete':

		$id = $_POST['id'];

		AddressService::delete($id);
		$contacts = AddressService::read();
		AddressView::showContacts($contacts);

	break;

}

?>