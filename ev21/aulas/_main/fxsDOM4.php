<?php  
	include_once 'src/simple_html_dom.php';
	include_once 'bdCals.php';

	header('Content-Type: text/html; charset=utf-8');

	function getHtml($url) {
		return file_get_contents($url);
	}

	function getEls($strTEXT, $strSEP) {
		$arrEls = explode($strSEP, $strTEXT); // Divido la string.
		unset($arrEls[0]); // Borro el primer elemento que es basura.
		return $arrEls;
	}
	
	function getVal($strTEXT, $strFIN, $strINI = '') {
		if ($strINI<>'') {
			$arrVal = explode($strFIN, $strTEXT);
			$arrVal = explode($strINI, $arrVal[0]);
			$val = $arrVal[1];
		} else {
			$arrVal = explode($strFIN, $strTEXT);
			$val = $arrVal[0];
		}
		return $val;
	}

	function getDias($strTEXT, $strSEP = '<div class="date">') {
		return getEls($strTEXT, $strSEP);
	}
	
	function getEventos($strTEXT, $strSEP = '<td class="event-time">') {
		return getEls($strTEXT, $strSEP);
	}
	
	function getFecha($strTEXT, $strFIN = '</div>') {
		return getVal($strTEXT, $strFIN);
	}

	function getHoraE($strTEXT, $strFIN = '</td>') {
		return getVal($strTEXT, $strFIN);
	}

	function getNomE($strTEXT, $strFIN = '</span>', $strINI = '<span class="event-summary">') {
		return getVal($strTEXT, $strFIN, $strINI);
	}


	$calID   = 'ICI5to';
	$calURL  = getUrlCal($calID, 1);
	$calHTML = getHtml($calURL);
	
	foreach ( getDias($calHTML) as $dia ) {
		echo getFecha($dia)."<br>";
		foreach ( getEventos($dia) as $evento)  {
			echo getHoraE($evento)." - ".getNomE($evento)."<br>"; // El Evento
		}
	}







	// echo $calURL."<br>";
	// echo count($arrDias)."<br>";

	// $outTEXT    = $arrDias[1];
	// $outTEXT    = $strSeparador.implode($strSeparador, $arrDias);
	


	// define the URL to load
	// $outTEXT = $calHTML;
	// echo "<textarea style='width: 100%;height: 100%;'>$outTEXT</textarea>";
?>
