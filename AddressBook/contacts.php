<?php include('core/init.php'); ?>

<?php 
//create db obj
$db = new Database();
//run query
$db->query('SELECT * FROM addresses');
//assign resultset
$contacts = $db->resultset();
?>

<div class="row">
	<div class="large-12 columns">
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Address</th>
					<th>Group</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($contacts as $contact): ?>
					<tr>
						<td><?php echo $contact->first_name.' '.$contact->last_name; ?></td>
						<td><?php echo $contact->phone; ?></td>
						<td><?php echo $contact->email; ?></td>
						<td>
							<ul>
								<li><?php echo $contact->address_1; ?></li>
								<li><?php echo $contact->address_2; ?></li>
								<li class="city-zip"><?php echo $contact->city; ?>, <?php echo $contact->state; ?> - <?php echo $contact->zipcode; ?></li>
							</ul>
						</td>
						<td><?php echo $contact->contact_group; ?></td>
						<td>
							<ul class="button-group">
								<li><a class="button tinny">Edit</a></li>
								<li><a class="button tinny alert">Delete</a></li>
							</ul>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>