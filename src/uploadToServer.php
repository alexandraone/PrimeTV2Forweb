<?php
// For debug
file_put_contents('Output/phpLog2.txt', print_r($_POST,true), FILE_APPEND);

// Guesttree upload
$target_dir = "Input/";
$guesttree_target_file = $target_dir . basename($_FILES["guesttree"]["name"]);
$uploadOk = 2;
$guesttreeFileType = pathinfo($guesttree_target_file, PATHINFO_EXTENSION);


	//Check if file is ok
	if(strcmp($guesttreeFileType,"rtree") == 0 or strcmp($guesttreeFileType,"gtree") == 0) {
		//$correct = "File is correct";
		//echo "<script type='text/javascript'>alert('$correct');</script>";
		$uploadOk = 1;
	} elseif (filesize($guesttreeFileType) == 0){
		$noFile = "Must choose guest tree upload.php";
		echo "<script type='text/javascript'>alert('$noFile');</script>";
		$uploadOk = 0;

	} else {
		$incorrect = "File is not correct";
		echo "<script type='text/javascript'>alert('$incorrect');</script>";
		$uploadOk = 0;
	}
	//debug_to_console( "uploadOk=" . $uploadOk;
	if($uploadOk == 0) {
		$notUploaded = "Sorry, your file was not uploaded";
		echo "<script type='text/javascript'>alert('$notUploaded');</script>";
		exit();
	} else {
		if(move_uploaded_file($_FILES["guesttree"][tmp_name], $guesttree_target_file)) {	
		//$uploaded = "The file" . basename($_FILES["guesttree"]["name"]). " has been uploaded. ";
		//echo "<script type='text/javascript'>alert('$uploaded');</script>";
		} else {
			$errorUploading = "Sorry, there was an error uploading your file";
			echo "<script type='text/javascript'>alert('$errorUploading');</script>";
		}
	}



//host tree upload
$target_dir = "Input/";
$arttree_target_file = $target_dir . basename($_FILES["arttree"]["name"]);
$uploadOk = 2;
$arttreeFileType = pathinfo($arttree_target_file, PATHINFO_EXTENSION);

	//Check if file is ok
	if(strcmp($arttreeFileType,'stree') == 0) {
		//$correct = "File is correct";
		//echo "<script type='text/javascript'>alert('$correct');</script>";
		$uploadOk = 1;
	} elseif (filesize($arttreeFileType) == 0){
		$noFile = "Must choose host tree";
		echo "<script type='text/javascript'>alert('$noFile');</script>";
		$uploadOk = 0;

	} else {
		$incorrect = "File is not correct";
		echo "<script type='text/javascript'>alert('$incorrect');</script>";
		$uploadOk = 0;
	}
	
	if($uploadOk == 0) {
		$notUploaded = "Sorry, your file was not uploaded";
		echo "<script type='text/javascript'>alert('$notUploaded');</script>";
		exit();
	} else {
		if(move_uploaded_file($_FILES["arttree"][tmp_name], $arttree_target_file)) {
			//$uploaded = "The file" . basename($_FILES["arttree"]["name"]). " has been uploaded. ";
			//echo "<script type='text/javascript'>alert('$uploaded');</script>";
		} else {
			$errorUploading = "Sorry, there was an error uploading your file";
			echo "<script type='text/javascript'>alert('$errorUploading');</script>";
		}
	}


//Mapfile upload if alternative input is selected

if(!empty(basename($_FILES["mapfile"]["name"]))) {
	$target_dir = "Input/";
	$mapfile_target_file = $target_dir . basename($_FILES["mapfile"]["name"]);
	//debug_to_console( "target file=" . $mapfile_target_file;
	$uploadOk = 2;
	$mapfileFileType = pathinfo($mapfile_target_file, PATHINFO_EXTENSION);
//debug_to_console($mapfileFileType );

	//Check if file is ok
	if(strcmp($mapfileFileType,'map') == 0) {
		//$correct = "File is correct";
		//echo "<script type='text/javascript'>alert('$correct');</script>";
		$uploadOk = 1;
	} else {
		$incorrect = "File is not correct";
		echo "<script type='text/javascript'>alert('$incorrect');</script>";
		$uploadOk = 0;
	}
	//debug_to_console( "uploadOk=" . $uploadOk;
	if($uploadOk == 0) {
		$notUploaded = "Sorry, your file was not uploaded";
		echo "<script type='text/javascript'>alert('$notUploaded');</script>";
		exit();
	} else {
		if(move_uploaded_file($_FILES["mapfile"][tmp_name], $mapfile_target_file)) {
			//$uploaded = "The file" . basename($_FILES["mapfile"]["name"]). " has been uploaded. ";
			//echo "<script type='text/javascript'>alert('$uploaded');</script>";
		} else {
			$errorUploading = "Sorry, there was an error uploading your file";
			echo "<script type='text/javascript'>alert('$errorUploading');</script>";
			}
		}
}

if($uploadOk == 1) {
	echo "<script type='text/javascript'>alert('you have submitted the files');</script>";
}
?>