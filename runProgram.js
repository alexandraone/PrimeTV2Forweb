function runProgram() {
	$.ajax({
		type: "POST",
		url: 'runProgram.php',
		data: {
			action: 'call_this',
			param: 'Input/cyano6.rtree Input/cyano.stree'
		},
		// Här ska datat från programmet returneras (bilden)
		success: function(html) {
			//alert(html);
			location.reload();
		},
		  // Alert status code and error if fail
    error: function (xhr, ajaxOptions, thrownError){
        alert(xhr.status);
        alert(thrownError);
    }


	});
}