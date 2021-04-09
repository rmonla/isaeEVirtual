<?php 
/**
 * bdAulas.php es el archivo con la información de la base de datos de las aulas virtuales.
 */

	$bdNoms = [ // BD de Play Lists de YouTube.
		
		// "np0121" => "2do Grado [B] - ISAE 2021 - np0121",	//89909697836
		"np0121" => "1er Grado [A] - ISAE 2021 - np0121",	//89909697836
		
		// "np0021" => "3er Grado [B] - ISAE 2021 - np0021",	//84689282612
		"np0021" => "1er Grado [B] - ISAE 2021 - np0021",	//84689282612
		
		"np0221" => "2do Grado - ISAE 2021 - np0221",	//84309965356
		"np0321" => "3er Grado - ISAE 2021 - np0321",	//86051147626
		
		"np0421" => "4to Grado - ISAE 2021 - np0421",	//87963509629
		"np0521" => "5to Grado - ISAE 2021 - np0521",	//86414208695
		"np0621" => "6to Grado - ISAE 2021 - np0621",	//87522044907
		"np0721" => "7mo Grado - ISAE 2021 - np0721",	//89237904211
		
		"ns0121" => "1er Año - ISAE 2021 - ns0121",	//83050120319
		"ns0221" => "2do Año - ISAE 2021 - ns0221",	//84721387672
		"ns0321" => "3er Año - ISAE 2021 - ns0321",	//83690447524
		"ns0421" => "4to Año - ISAE 2021 - ns0421",	//83751299693
		"ns0521" => "5to Año - ISAE 2021 - ns0521",	//89085143676

		"nsinfo" => "Modalidad Informática - ISAE 2021 - nsinfo",	//84946148032
		"nsnatu" => "Modalidad Cs. Naturales - ISAE 2021 - nsnatu",	//83138483225
		// "np0021" => "Sala de Reuniones Primaria - ISAE 2021 - np0021",	//84689282612
		"ID"    => "Nombre Aula"
	];

	$bdPList = [ // BD de Play Lists de YouTube.
		"PI21IntCA" => "PLSOY8GuPHc0AiPKzvqodComhSydOLVUXB",
		"PI21IntCB" => "PLSOY8GuPHc0BPNoXmdoY55G_8ftUnAMjs",
		"PreIngComA" => "PLSOY8GuPHc0AiCvJ0UHUrFFBsJYLnTAoR",
		"PreIngComB" => "PLSOY8GuPHc0AiCvJ0UHUrFFBsJYLnTAoR",
		"PreIng"     => "PLSOY8GuPHc0AiCvJ0UHUrFFBsJYLnTAoR",
		"ICI1ro"     => "PLSOY8GuPHc0Cwf44jcSVV9t54r0ykksRV",
		"ICI2do"     => "PLSOY8GuPHc0BO2Oi4y9BsxfhVHP7DAvjH",
		"ICI3ro"     => "PLSOY8GuPHc0BoRPUx0szagXoK9vRrt0gp",
		"ICI4to"     => "PLSOY8GuPHc0CtmmekAJGx1pXDFlqL-i5q",
		"ICI5to"     => "PLSOY8GuPHc0CcZ5DsBMX4u3gIKG87a6up",
		"IEL1ro"     => "PLSOY8GuPHc0ABU9DTJ3u4IFXlPWtpE3Fc",
		"IEL2do"     => "PLSOY8GuPHc0DQ3sghyebH3509oFmL61Hn",
		"IEL3ro"     => "PLSOY8GuPHc0BUcYc7vMS0tkRQDkEat9vv",
		"IEM1ro"     => "PLSOY8GuPHc0D1cIUQ6KE4Fa80VxzqlZGM",
		"IEM2do"     => "PLSOY8GuPHc0DVtPWmPaY0PavhT8WINUuB",
		"IEM3ro"     => "PLSOY8GuPHc0DIwhv2NBaOIrORDH1FafVc",
		"IEM4to"     => "PLSOY8GuPHc0AefuPEpkENOln2aFecc2Ex"
	];

	$bdEstados = [
		[ 
			"0=Bloqueda" 
		],[ 
			"APublica",
			"1=BASIC"
		],[ 
			'np0121',
			'np0221',
			'np0321',
			'np0421',
			'np0521',
			'np0621',
			'np0721',
			'ns0121',
			'ns0221',
			'ns0321',
			'ns0421',
			'ns0521',
			
			'nsinfo',
			'nsnatu',
			'np0021',
			"2=PRO"
		]
	];
	
	$bdZoomIDs = [ // BD de IDs de Aulas Zoom. 
		"np0121" => [ '', '', '89909697836'],	//89909697836
		"np0221" => [ '', '', '84309965356'],	//84309965356
		"np0321" => [ '', '', '86051147626'],	//86051147626
		"np0421" => [ '', '', '87963509629'],	//87963509629
		"np0521" => [ '', '', '86414208695'],	//86414208695
		"np0621" => [ '', '', '87522044907'],	//87522044907
		"np0721" => [ '', '', '89237904211'],	//89237904211
		"ns0121" => [ '', '', '83050120319'],	//83050120319
		"ns0221" => [ '', '', '84721387672'],	//84721387672
		"ns0321" => [ '', '', '83690447524'],	//83690447524
		"ns0421" => [ '', '', '83751299693'],	//83751299693
		"ns0521" => [ '', '', '89085143676'],	//89085143676

		"nsinfo" => [ '', '', '84946148032'],	//84946148032
		"nsnatu" => [ '', '', '83138483225'],	//83138483225
		"np0021" => [ '', '', '84689282612'],	//84689282612
		"aID"   => ["0=Bloqueda", "1=BASIC", "2=PRO"]
	];
		// "APublica" => [    2      , "96761370074", "435997049"  , ""           ]

	function getEstado($aID){
		global $bdEstados;
		$Estado = 0;
		foreach ($bdEstados as $aEst => $lista)
			if (in_array($aID, $lista))
				$Estado = $aEst;
		return $Estado;
	}
	function getNom($aID){
		global $bdNoms;
		return isset($bdNoms[$aID]) ? $bdNoms[$aID] : 0;
	}
	function getZoomDat($aID){
		global $bdZoomIDs;
		return isset($bdZoomIDs[$aID]) ? $bdZoomIDs[$aID] : 0;
	}
	function getPListID($aID){
		global $bdPList;
		return isset($bdPList[$aID]) ? $bdPList[$aID] : 0;
	}
	function getPList($aID){
		$PListID = getPListID($aID);
		return $PListID ? 
			"<a target='_blank' href='https://www.youtube.com/playlist?list=".$PListID."'>Clases_Grabadas</a>" : '';
	}
			//"http://www.youtube.com/c/UTNLaRiojaDTIC/playlists" ;

	/**
	 * Genera el html de enlace de un aula a partir de in ID que se encuentra en la base de datos.
	 * @param  string $aID ID del Aula
	 * @return string      HTML de acceso al Aula.
	 */
	function getAula($aID){
		// ZoomDat
			$aZoomDat = getZoomDat($aID);

		if ( !$aZoomDat ) return "<br>ERRORAula<br>";

		// Array enlaces.
			$aEnlaces = [];

		// Estado del Aula
			// echo '['.getEstado($aID).']';
			$aEst = getEstado($aID);

		// ID del Aula
			$aZoomID = $aZoomDat[$aEst];

		// Nombre del Aula
			$nSep = ['x', '~', '-'];
			$nSep = $nSep[$aEst];
			
			$aNom = ( $aNom = getNom($aID) ) ? "$nSep $aNom" : "$nSep $aID UTNLaRioja" ;

			// $aNom = $aID.$nSep.'UTNLaRioja';

		// Enlace del Aula
			$aOnClick   = "onclick=\"gtag('event', '$aNom', {'event_category': '$aID', 'event_label': '', 'value': '$aNom', 'non_interaction': true });\"";
			$aZoomUrl   = "https://zoom.us/j/$aZoomID";
			$aZoom      = "<a target='_blank' href='$aZoomUrl' $aOnClick>$aNom</a>";
			$aEnlaces[] = $aZoom;

		// PlayList
			$aPList = getPList($aID) ;

			if ( $aPList ) $aEnlaces[] = $aPList;

			$aEnlaces = implode(' ---> ', $aEnlaces);
			
		return "<p class='align-center' mbr-fonts-style panel-text display-7'>$aEnlaces</p>";
	}
		// onclick="gaReg('$id'); return false;"
	
/**
 * Genera el html del grupo de Aulas.
 * @param  string $grupo  ID del grupo
 * @param  string $titulo TITULO para mostrar del Grupo.
 * @param  string $aulas  HTML de las Aulas.
 * @return html           HTML del Grupo.
 */
function getGrupo($grupo='', $titulo='', $aulas=''){
    $grupo2 = $grupo . '_0';
    
    return <<<HTML
    <div class="card"> <!-- $titulo -->
        <div class="card-header" role="tab" id="headingOne">
            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#$grupo2" aria-expanded="false" aria-controls="$grupo">
                <h4 class="mbr-fonts-style display-5">
                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                    $titulo
                  </h4>
              </a>
          </div>
        <div id="$grupo2" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_0">
            <div class="panel-body p-4">
              $aulas
            </div>
          </div>
    </div>
HTML;
  }

function getGrupo2($grupo='', $titulo='', $aulas=''){
    $grupo2 = $grupo . '_0';
    
    return <<<HTML
    <div class="card"> <!-- $titulo -->
        <div class="card-header" role="tab" id="headingDos">
            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#$grupo2" aria-expanded="false" aria-controls="$grupo">
                <h4 class="mbr-fonts-style display-5">
                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                    $titulo
                  </h4>
              </a>
          </div>
        <div id="$grupo2" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingDos" data-parent="#bootstrap-accordion_0">
            <div class="panel-body p-4">
              $aulas
            </div>
          </div>
    </div>
HTML;
  }

	// echo '<pre>'.print_r( $bdZoomIDs, true ).'</pre>';

	// exit;

 ?>