if($_POST)['action'] == 'call_this') {
	<?php


	file_put_contents('Output/phpLog.txt', print_r($_POST,true), FILE_APPEND);

	$program_params = $_POST['param'];

	file_put_contents('Output/phpLog.txt', print_r($program_params,true), FILE_APPEND);

//	echo passthru('/Users/alexandraone/Sites/PrimeTV2/../../Exjobb_utanQT/primetv_build/primetv ' . $program_params . ' 
	echo passthru('./primetv ' . $program_params . ' -o Output/tmp');
?>
}


