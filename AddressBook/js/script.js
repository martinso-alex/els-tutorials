
var show_contacts = function(){
	setTimeout("$('#page-content').load('contacts.php',function(){$('#loader-image').hide();})",1000);
}

var add_contact = function(){
	$(document).on('click','#add',function(){
		//$.post('add_contact.php').done(function(data){
			//console.log(data);
			//$('#page-content').html(data);
		//});

		var first = $('#first_name').val();
		var last = $('#last_name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var group = $('#contact_group').val();
		var adr1 = $('#address_1').val();
		var adr2 = $('#address_2').val();
		var city = $('#city').val();
		var state = $('#state').val();
		var zip = $('#zipcode').val();
		var notes = $('#notes').val();

		//console.log(first+last+email+phone+group+adr1+adr2+city+state+zip+notes);

		$.ajax({
			type: 'POST',
			url: 'add_contact.php',
			data: {first_name:first,last_name:last,email:email,phone:phone,contact_group:group,address_1:adr1,address_2:adr2,city:city,state:state,zipcode:zip,notes:notes},
			success: function(data){
				console.log(data);
			}
		});
	});
}

$(document).ready(show_contacts);
$(document).ready(add_contact);