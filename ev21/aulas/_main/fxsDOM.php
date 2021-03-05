<?php  
	include_once 'src/simple_html_dom.php';
	include_once 'bdCals.php';

	// header('Content-Type: text/html; charset=utf-8');


	function getHtml($url) {
		return file_get_contents($url);
	}
	
	$calID   = 'ICI5to';
	$calURL  = getUrlCal($calID, 1);
	$calHTML = getHtml($calURL);


	echo $calURL;
	// echo $calHTML;
	exit;

	

  $doc = new \DOMDocument();
  @ $doc->loadHTML($html);

  $xpath = new \DOMXpath($doc);
  $arrDias = $xpath->query('//div[@class="date"]');

  foreach ($arrDias as $dia) {
		$dia  = $dia->parentNode;
		$eDia = $dia->getElementsByTagName("div")[0]->nodeValue;
		echo "<br>$eDia<br>";

  	$trs = $dia->getElementsByTagName("tr");
		foreach ($trs as $ev) {
			$tds = $ev->getElementsByTagName("td");
			foreach ($tds as $td) {
				switch ($td->getAttribute('class')) {
			    case 'event-time' :
			      $eHora = $td->nodeValue;
			    break;
			    case 'event-eventInfo' :
			      $eInfo = $td->nodeValue;
			    break;
			  }			
			}
			echo "$eHora - ".utf8_decode($eInfo)."<br>";
		}

  }


?>
