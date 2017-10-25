<?php

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

debug_to_console("hej" );

// Guesttree upload
$target_dir = "Input/";
$guesttree_target_file = $target_dir . basename($_FILES["guesttree"]["name"]);
//debug_to_console( "target file=" . $target_file;
$uploadOk = 2;
$guesttreeFileType = pathinfo($guesttree_target_file, PATHINFO_EXTENSION);
//debug_to_console( "filetype = " . $imageFileType;

debug_to_console($guesttreeFileType);
//Check if file is ok
	if(strcmp($guesttreeFileType,"rtree") == 0) {
		debug_to_console( "File is correct ");
		$uploadOk = 1;
	} else {
		debug_to_console( "File is not correct ");
		$uploadOk = 0;
	}
//debug_to_console( "uploadOk=" . $uploadOk;
if($uploadOk == 0) {
	debug_to_console( "Sorry, your file was not uploaded");
} else {
	if(move_uploaded_file($_FILES["guesttree"][tmp_name], $guesttree_target_file)) {	
		debug_to_console( "The file " . basename($_FILES["guesttree"]["name"]). " has been uploaded. ");
	} else {
		debug_to_console( "Sorry, there was an error uploading your file");
	}
}


//Arttree upload

$target_dir = "/Users/alexandraone/Sites/PrimeTV2/Input/";
$arttree_target_file = $target_dir . basename($_FILES["arttree"]["name"]);
//debug_to_console( "target file=" . $target_file;
$uploadOk = 2;
$arttreeFileType = pathinfo($arttree_target_file, PATHINFO_EXTENSION);
//debug_to_console( "filetype = " . $imageFileType;
debug_to_console($arttreeFileType );

//Check if file is ok
	if(strcmp($arttreeFileType,'stree') == 0) {
		debug_to_console( "File is correct ");
		$uploadOk = 1;
	} else {
		debug_to_console( "File is not correct ");
		$uploadOk = 0;
	}
//debug_to_console( "uploadOk=" . $uploadOk;
if($uploadOk == 0) {
	debug_to_console( "Sorry, your file was not uploaded");
} else {
	if(move_uploaded_file($_FILES["arttree"][tmp_name], $arttree_target_file)) {	
		debug_to_console( "The file " . basename($_FILES["arttree"]["name"]). " has been uploaded. ");
	} else {
		debug_to_console( "Sorry, there was an error uploading your file");
	}
}


//Mapfile upload if alternative input is selected

if(!empty(basename($_FILES["mapfile"]["name"]))) {
	$target_dir = "/Users/alexandraone/Sites/PrimeTV2/Input/";
	$mapfile_target_file = $target_dir . basename($_FILES["mapfile"]["name"]);
	//debug_to_console( "target file=" . $mapfile_target_file;
	$uploadOk = 2;
	$mapfileFileType = pathinfo($mapfile_target_file, PATHINFO_EXTENSION);
debug_to_console($mapfileFileType );

//Check if file is ok
	if(strcmp($mapfileFileType,'map') == 0) {
		debug_to_console("File is correct ");
		$uploadOk = 1;
	} else {
		debug_to_console("File is not correct");
		$uploadOk = 0;
	}
	//debug_to_console( "uploadOk=" . $uploadOk;
	if($uploadOk == 0) {
		debug_to_console("Sorry, your file was not uploaded");
	} else {
		if(move_uploaded_file($_FILES["mapfile"][tmp_name], $mapfile_target_file)) {	
			debug_to_console("The file " . basename($_FILES["mapfile"]["name"]). " has been uploaded. ");
		} else {
			debug_to_console("Sorry, there was an error uploading your file");
			}
		}
}
?>

<script type="text/javascript">alert('you have submitted the files');</script>