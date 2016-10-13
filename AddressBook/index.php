<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ajax Address Book</title>
		<link rel="stylesheet" href="view/css/foundation.css">
		<link rel="stylesheet" href="view/css/custom.css">
	</head>

	<body>

		<br>
		<div class="row">
			<div class="large-6 columns">
				<h1>Address Book</h1>
			</div>

			<div class="large-6 columns">
				<button data-open="addModal" class="add-btn button float-right">Add Contact</button>

				<div class="reveal" id="addModal" data-reveal>
					<h4>Add Contact</h4><hr>

					<form>
						<div class="row">
							<div class="large-6 columns">
								<label>First Name
									<input id="first_name" type="text" placeholder="Enter First Name">
								</label>
							</div>

							<div class="large-6 columns">
								<label>Last Name
									<input id="last_name" type="text" placeholder="Enter Last Name">
								</label>
							</div>
						</div>

						<div class="row">
							<div class="large-4 columns">
								<label>Email
									<input id="email" type="email" placeholder="Enter Email Address">
								</label>
							</div>

							<div class="large-4 columns">
								<label>Phone Number
									<input id="phone" type="text" placeholder="Enter Phone Number">
								</label>
							</div>

							<div class="large-4 columns">
								<label>Contact Group
									<select id="contact_group">
										<option value="Family">Family</option>
										<option value="Friends">Friends</option>
										<option value="Business">Business</option>
									</select>
								</label>
							</div>
						</div>

						<div class="row">
							<div class="large-6 columns">
								<label>Address 1
									<input id="address_1" type="text" placeholder="Place Addres 1">
								</label>
							</div>

							<div class="large-6 columns">
								<label>Address 2
									<input id="address_2" type="text" placeholder="Place Addres 2">
								</label>
							</div>
						</div>

						<div class="row">
							<div class="large-4 columns">
								<label>City
									<input id="city" type="text" placeholder="Enter City">
								</label>
							</div>

							<div class="large-4 columns">
								<label>State
									<select id="state">
										<option value="AC">Acre</option>
										<option value="AL">Alagoas</option>
										<option value="AP">Amapá</option>
										<option value="AM">Amazonas</option>
										<option value="BA">Bahia</option>
										<option value="CE">Ceará</option>
										<option value="DF">Distrito Federal</option>
										<option value="ES">Espírito Santo</option>
										<option value="GO">Goiás</option>
										<option value="MA">Maranhão</option>
										<option value="MT">Mato Grosso</option>
										<option value="MS">Mato Grosso do Sul</option>
										<option value="MG">Minas Gerais</option>
										<option value="PA">Pará</option>
										<option value="PB">Paraíba</option>
										<option value="PR">Paraná</option>
										<option value="PE">Pernambuco</option>
										<option value="PI">Piauí</option>
										<option value="RJ">Rio de Janeiro</option>
										<option value="RN">Rio Grande do Norte</option>
										<option value="RS">Rio Grande do Sul</option>
										<option value="RO">Rondônia</option>
										<option value="RR">Roraima</option>
										<option value="SC">Santa Catarina</option>
										<option value="SP">São Paulo</option>
										<option value="SE">Sergipe</option>
										<option value="TO">Tocantins</option>
									</select>
								</label>
							</div>

							<div class="large-4 columns">
								<label>Zipcode
									<input id="zipcode" type="text" placeholder="Enter Zipcode">
								</label>
							</div>
						</div>

						<div class="row">
							<div class="large-12 columns">
								<label>Notes
									<textarea id="notes" placeholder="Enter Optional Notes"></textarea>
								</label>
							</div>
						</div>
					</form>

					<hr><div id="add" class="add-btn button float-right" data-close>Submit</div>

					<button class="close-button" data-close aria-label="Close modal" type="button">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>

		<div id="loader-image">
			<img src="view/img/ajax-loader.gif" alt="loading">
		</div>

		<div class="row" style="display:none" id="address-table-content">
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

					<tbody id="address-tbody"></tbody>
				</table>
			</div>
		</div>

		<div class="reveal" id="delModal" data-reveal>
			<h5>Do you really want to delete this contact?</h5><br>
			<div class="button float-right confirm-delete alert" data-close>Delete</div>
			<div class="button float-right cancel-del" data-close>Cancel</div>
		</div>;

		<script src="js/vendor/jquery.js"></script>
		<script src="controller/js/address.js"></script>
		<script src="js/vendor/what-input.js"></script>
		<script src="js/vendor/foundation.js"></script>
		<script src="js/app.js"></script>

	</body>
</html>
