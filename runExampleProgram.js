	function runExampleProgram() {
			$.ajax({
				type: "POST",
				url: 'runExampleProgram.php',
				data: {
					action: 'call_this',
					exampleInput: 'Input/cyano6.rtree Input/cyano.stree',
				},
				success: function(html) {
					//alert(html);
					//location.reload();
				},
				  // Alert status code and error if fail
		    error: function (xhr, ajaxOptions, thrownError){
		    	if(xhr.status != 0) {
		        alert(xhr.status);
		        alert(thrownError);
		    	}
		    }
			}).done(function(data) { window.location.href="render.php";});
			}