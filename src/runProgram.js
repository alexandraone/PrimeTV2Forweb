				function runProgram() {
					var alternative = $('input[name="inputRb"]:checked').val();
					//Adds everything in form to formdata
					var form = $('#uploadFilesID')[0];
					var form_data = new FormData(form);

					//Get extension for output file
					var file_type = $("#extension :selected").text();

					//guest tree check
					if($('#guest')[0].files.length == 0) {
						alert("Must choose a guest tree");
						return false;
					} else {
					var guesttree = $('#guest')[0].files[0].name;
					//Add guest tree to form_data
					form_data.append('guesttree', guesttree);
					}
					//Host tree check
					if($('#art')[0].files.length == 0) {
						alert("Must choose a host tree");
						return false;
					} else {
						var arttree = $('#art')[0].files[0].name;
						//Add arttree to form_data
						form_data.append('arttree', arttree);
					}
					//mapfile check
					if(alternative == 'alt') {
						if($('#mapfile')[0].files.length == 0) {
							alert("Must choose a mapfile");
							return false;
						}
						else {
						var mapfile = $('#mapfile')[0].files[0].name;
						//Add mapfile to form_data
						form_data.append('mapfile', mapfile);
						} 
					}

		          $.ajax({
		            type: "POST",
		            url: 'runProgram.php',
		            data: form_data,
		            processData: false,
		            contentType : false,
		            async : false, 
		            success: function(html) {
		              //alert(html);
		              //location.reload();
		            },
		              // Alert status code and error if fail
		              error: function (xhr, ajaxOptions, thrownError){
		                    if(xhr.status != 0) {
		                    alert("status def=" + xhr.status);
		                    alert("error def=" + thrownError);
		                  };
		              }
		          }).done(function(data) { window.location.href="render.php?file_type=" + file_type;}); 
		   }

