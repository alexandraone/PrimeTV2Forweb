			//$(document).ready(function(){
			//	$("button").click(function(){
				function runProgram() {
					var alternative = $('input[name="inputRb"]:checked').val();
					var form = $('#uploadFilesID')[0];
					var form_data = new FormData(form);
					if($('#guest')[0].files.length == 0) {
						alert("Must choose a guest tree");
						return false;
					} else {
					var guesttree = $('#guest')[0].files[0].name;
					form_data.append('guesttree', guesttree);
					}
					if($('#art')[0].files.length == 0) {
						alert("Must choose a host tree");
						return false;
					} else {
						var arttree = $('#art')[0].files[0].name;
						form_data.append('arttree', arttree);
					}
					if(alternative == 'alt') {
						if($('#mapfile')[0].files.length == 0) {
							alert("Must choose a mapfile");
							return false;
						}
						else {
						var mapfile = $('#mapfile')[0].files[0].name;
						form_data.append('mapfile', mapfile);
						} 
					}

		          
		          $.ajax({
		            type: "POST",
		            url: 'runProgram.php',
		            //data: form.serialize(),
		            data: form_data,
		            processData: false,
		            contentType : false,
		            success: function(html) {
		              //alert(html);
		              //location.reload();
		            },
		              // Alert status code and error if fail
		              error: function (xhr, ajaxOptions, thrownError){
		                    if(xhr.status != 0) {
		                    alert("status def=" + xhr.status);
		                    alert("error def=" + thrownError);
		                  }
		              }
		          }); 
		       window.location.href="render.php";
		   }
		//});
		//});
