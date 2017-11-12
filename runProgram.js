	function runProgram() {
		var alternative = $('input[name="inputRb"]:checked').val();

		if (alternative == "def") {
		$.ajax({
			type: "POST",
			url: 'runProgram.php',
			data: {
				action: 'call_this',
				guesttree: document.getElementById("guest").files[0].name,
				arttree: document.getElementById("art").files[0].name
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
		else {
			$.ajax({
				type: "POST",
				url: 'runProgram.php',
				data: {
					action: 'call_this',
					guesttree: document.getElementById("guest").files[0].name,
					arttree: document.getElementById("art").files[0].name,
					mapfile: document.getElementById("mapfile").files[0].name
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