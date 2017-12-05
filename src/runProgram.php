if($_POST)['action'] == 'call_this') {
	<?php
	$file1_to_delete ='Output/phpLog.txt';

	if (is_file($file1_to_delete)){
    	if(unlink($file1_to_delete)) {
    		file_put_contents('Output/phpLog.txt', 'Log-file deleted', FILE_APPEND);
    	} else {
    		file_put_contents('Output/phpLog.txt', 'Problem deleting log-file', FILE_APPEND);

    	}
	}
	

	file_put_contents('Output/phpLog.txt', print_r($_POST,true), FILE_APPEND);

	$guesttree = 'Input/' . $_POST['guesttree'];
	//file_put_contents('Output/phpLog.txt', print_r($guesttree,true), FILE_APPEND);

	$arttree = 'Input/' . $_POST['arttree'];
//	file_put_contents('Output/phpLog.txt', print_r($arttree,true), FILE_APPEND);

	$mapfile = 'Input/' . $_POST['mapfile'];
//	file_put_contents('Output/phpLog.txt', print_r($mapfile,true), FILE_APPEND);

	//Format and output file
//	$params = ' -f svg  -o Output/tmp'; 
	$params = ' -o Output/tmp'; 


	//Colors
	$color = $_POST['color'];
	if ($color != '') {
		$params = $params . ' -c ' . $color;
	}

	//No time scale
	$noTimeScale = $_POST['time'];
	if ($noTimeScale != '' && $noTimeScale == 'noTimeScale') {
		$params = $params . ' -t';
	}

	//Annotate host edges by their time
	$hostedgesByTime = $_POST['time'];
	if ($hostedgesByTime != '' && $hostedgesByTime == 'hostedgesByTime') {
		$params = $params . ' -e';
	}

	//No time at all
	$noTime = $_POST['time'];
	if ($noTime != '' && $noTime == 'noTime') {
		$params = $params . ' -n';
	}

	//Guesttree font
	$guestFont = $_POST['guestFont'];
	if ($guestFont != '') {
		$params = $params . ' -j ' . $guestFont;
	}

	//Hosttree font
	$hostFont = $_POST['hostFont'];
	if ($hostFont != '') {
		$params = $params . ' -q ' . $hostFont;
	}

	//All fonts
	$allFont = $_POST['allFont'];
	if ($allFonts != '') {
		$params = $params . ' -A ' . $allFonts;
	}

		//Activate legend
	$activateLegend = $_POST['activateLegend'];
	if ($activateLegend != '') {
		$params = $params . ' -L';
	}

	//Activate header
	$activateHeader = $_POST['activateHeader'];
	if ($activateHeader != '') {
		$params = $params . ' -H';
	}

	//Text from input file for textOnTop
	$textInput = $_POST['textOnTopInput'];

	//Include the text on the top of the image
	$textOnTop = $_POST['textOnTop'];
	if ($textOnTop != '') {
		$params = $params . ' -T ' . $textInput;
	}

	//LGT cost
	$LGTcost = $_POST['LGTcost'];
	if ($LGTcost != '') {
		$params = $params . ' -l';
	}

	//Extension
	$extension = $_POST['extension'];
	if ($extension != '') {
		$params = $params . ' -f ' . $extension;
	}

	//Delete output file, avoid caching
	$file2_to_delete ='Output/tmp ' . $extension;

	if (is_file($file2_to_delete)){
    	if(unlink($file2_to_delete)) {
    		file_put_contents('Output/phpLog.txt', 'Outputfile deleted', FILE_APPEND);
    	} else {
    		file_put_contents('Output/phpLog.txt', 'Problem deleting outputfile', FILE_APPEND);

    	}
  	}

	file_put_contents('Output/phpLog.txt', print_r($params,true), FILE_APPEND);

	if(file_exists($mapfile)) {
		echo passthru('./primetv ' . $guesttree . ' ' . $arttree . ' ' . $params);
	}
	else {
		echo passthru('./primetv -r ' . $guesttree . ' ' . $arttree . ' ' . $mapfile . ' -o Output/tmp' . ' -f svg');
	
	}
	
?>
}


