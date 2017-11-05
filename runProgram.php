if($_POST)['action'] == 'call_this') {
	<?php


	file_put_contents('Output/phpLog.txt', print_r($_POST,true), FILE_APPEND);

//	$program_params = $_POST['param'];

//	file_put_contents('Output/phpLog.txt', print_r($program_params,true), FILE_APPEND);

	$guesttree = 'Input/' . $_POST['guesttree'];
	file_put_contents('Output/phpLog.txt', print_r($guesttree,true), FILE_APPEND);

	$arttree = 'Input/' . $_POST['arttree'];
	file_put_contents('Output/phpLog.txt', print_r($arttree,true), FILE_APPEND);

//	$mapfile = 'Input/' . $_POST['mapfile'];
//	file_put_contents('Output/phpLog.txt', print_r($mapfile,true), FILE_APPEND);

//	echo passthru('/Users/alexandraone/Sites/PrimeTV2/../../Exjobb_utanQT/primetv_build/primetv ' . $program_params . ' 
	$default = $_POST['input'];
	if($default == 'rbDef') {
		echo passthru('./primetv ' . $guesttree . ' ' . $arttree . ' -o Output/tmp');
	}
	else {
		echo passthru('./primetv ' . $guesttree . ' ' . $arttree . ' ' . $mapfile . ' -o Output/tmp');
	
	}
?>
}


