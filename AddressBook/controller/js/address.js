var read_addresses = function(){
	$.ajax({
		type: 'POST',
		url: 'controller/AddressController.php',
		data: {func:'read'},
		success: function(data){
			$('#loader-image').hide(0,function(){
				$('#address-table-content').fadeIn();
				$('#address-tbody').html(data);
			});			
		}
	});
}

var create_address = function(){
	$(document).on('click','#add',function(){
		var first = $('#first_name').val();
		var last  = $('#last_name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var adr1  = $('#address_1').val();
		var adr2  = $('#address_2').val();
		var city  = $('#city').val();
		var state = $('#state').val();
		var zip   = $('#zipcode').val();
		var notes = $('#notes').val();
		var group = $('#contact_group').val();

		$.ajax({
			type: 'POST',
			url: 'controller/AddressController.php',
			data: {func:'create',first:first,last:last,email:email,phone:phone,adr1:adr1,adr2:adr2,city:city,state:state,zip:zip,notes:notes,group:group},
			success: function(data){
				$('#address-tbody').html(data);
			}
		});
	});
}

var delete_address = function(){
	var id_delete;

	$(document).on('click','.delete',function(){
		id_delete = $(this).parent().parent().attr('id');
	});

	$(document).on('click','.confirm-delete',function(){
		$.ajax({
			type: 'POST',
			url:'controller/AddressController.php',
			data: {func:'delete',id:id_delete},
			success: function(data){
				$('#address-tbody').html(data);
			}
		});
	});
}

var update_address = function(){
	var id_update;

	$(document).on('click','.update',function(){
		id_update = $(this).parent().parent().attr('id');
	});

	$(document).on('click','.confirm-update',function(){
		var first = $('#first_name_alt').val();
		var last  = $('#last_name_alt').val();
		var email = $('#email_alt').val();
		var phone = $('#phone_alt').val();
		var adr1  = $('#address_1_alt').val();
		var adr2  = $('#address_2_alt').val();
		var city  = $('#city_alt').val();
		var state = $('#state_alt').val();
		var zip   = $('#zipcode_alt').val();
		var notes = $('#notes_alt').val();
		var group = $('#contact_group_alt').val();

		$.ajax({
			type: 'POST',
			url: 'controller/AddressController.php',
			data: {func:'update',id:id_update,first:first,last:last,email:email,phone:phone,adr1:adr1,adr2:adr2,city:city,state:state,zip:zip,notes:notes,group:group},
			success: function(data){
				$('#address-tbody').html(data);
			}
		});
	});
}

$(document).ready(read_addresses);
$(document).ready(create_address);
$(document).ready(delete_address);
$(document).ready(update_address);