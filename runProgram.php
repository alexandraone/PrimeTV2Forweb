if($_POST)['action'] == 'call_this') {
	<?php


	file_put_contents('Output/phpLog.txt', print_r($_POST,true), FILE_APPEND);

	$guesttree = 'Input/' . $_POST['guesttree'];
	//file_put_contents('Output/phpLog.txt', print_r($guesttree,true), FILE_APPEND);

	$arttree = 'Input/' . $_POST['arttree'];
//	file_put_contents('Output/phpLog.txt', print_r($arttree,true), FILE_APPEND);

	$mapfile = 'Input/' . $_POST['mapfile'];
//	file_put_contents('Output/phpLog.txt', print_r($mapfile,true), FILE_APPEND);

	// Hämta  alla parametrar om satta
	$params = '-f svg  -o Output/tmp';
	//$x== $_POST['x'];
//	if ($x != '') {
//		$param = $param . ' -x ' . $x;
//	}
	if(!file_exists($mapfile)) {
		echo passthru('./primetv ' . $guesttree . ' ' . $arttree . ' -o Output/tmp' . ' -f svg');
	}
	else {
		echo passthru('./primetv -r ' . $guesttree . ' ' . $arttree . ' ' . $mapfile . ' -o Output/tmp' . ' -f svg');
	
	}
	
?>
}


