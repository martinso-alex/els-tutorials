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
	$(document).on('click','.delete',function(){
		var id = $(this).parent().parent().attr('id');

		$(document).on('click','.confirm-delete',function(){
			$.ajax({
				type: 'POST',
				url:'controller/AddressController.php',
				data: {func:'delete',id:id},
				success:function(data){
					$('#address-tbody').html(data);
				}
			});
		});
	});
}

$(document).ready(read_addresses);
$(document).ready(create_address);
$(document).ready(delete_address);