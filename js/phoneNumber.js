function ShowPhoneNo(id){
	// old: window.location = "php/add_to_favourites.php?action=add&id=" + id;
	$.ajax({url: "php/get_phone_number.php?id=" + id, success: function(result){
	    $("#phoneNo").html(result);
	  }});
	
}
