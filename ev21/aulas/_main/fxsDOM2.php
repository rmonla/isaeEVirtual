<?php  
	include_once 'bdCals.php';

	$calID   = 'ICI5to';
	$calURL  = getUrlCal($calID, 1);

	$ch = curl_init($calURL);
	$fp = fopen("fxsDOM2.out", "w");

	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);

	$output = curl_exec($ch);
	curl_close($ch);
	fclose($fp);

	// echo $output;
	// exit;

?>
