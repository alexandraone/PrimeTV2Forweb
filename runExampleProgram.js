	function runExampleProgram() {
	document.getElementById("exampleButton").onclick = function() {
			$.ajax({
				type: "POST",
				url: 'runProgram.php',
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
		        alert(xhr.status);
		        alert(thrownError);
		    }
			});
			 } 
			}