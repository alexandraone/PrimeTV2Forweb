if($_POST)['action'] == 'call_this') {
	<?php


	file_put_contents('Output/phpLog.txt', print_r($_POST,true), FILE_APPEND);

	$exampleInput = $_POST['exampleInput'];
	//Parameter for program
	$params = ' -o Output/tmp' . $_POST['datetime']; 

		//file_put_contents('Output/phpLog.txt', print_r("example",true), FILE_APPEND);
		echo passthru('./primetv ' . $exampleInput . $params . ' -c grey -f svg');
	
?>
}


