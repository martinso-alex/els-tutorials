<?php

class AddressView{

	public static function showContacts($contacts){

		foreach($contacts as $contact):
			$view .=
			'<tr>
				<td> '.$contact->getFirst().' '.$contact->getLast().'</td>
				<td> '.$contact->getPhone().' </td>
				<td> '.$contact->getEmail().' </td>
				<td>
					<ul>
						<li> '.$contact->getAdr1().' </li>
						<li> '.$contact->getAdr2().' </li>
						<li class="city-zip"> '.$contact->getCity().' , '.$contact->getState().' - '.$contact->getZip().' </li>
					</ul>
				</td>
				<td> '.$contact->getGroup().' </td>
				<td>
					<ul class="button-group" id="'.$contact->getId().'">
						<li><a class="button tinny update">Edit</a></li>
						<li><a data-open="delModal" class="delete button tinny alert">Delete</a></li>
					</ul>
				</td>
			</tr>';
		endforeach;

		echo $view;

	}

}

?>