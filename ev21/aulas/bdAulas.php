<?php 
/**
 * bdAulas.php es el archivo con la información de la base de datos de las aulas virtuales.
 */

	$bdAULAs = [ // BD Aulas. 
		'PRIMARIA'   => [
			"21P1A"  => ['89909697836', '1er Grado [A] - ISAE 2021'],
			"21P1B"  => ['84689282612', '1er Grado [B] - ISAE 2021'],
			"21P2A"  => ['84309965356', '2do Grado [A] - ISAE 2021'],
			"21P2B"  => ['85765817321', '2do Grado [B] - ISAE 2021'],
			"21P3"   => ['86051147626', '3er Grado - ISAE 2021'],
			"21P4"   => ['87963509629', '4to Grado - ISAE 2021'],
			"21P5"   => ['86414208695', '5to Grado - ISAE 2021'],
			"21P6"   => ['87522044907', '6to Grado - ISAE 2021'],
			"21P7"   => ['89237904211', '7mo Grado - ISAE 2021']
		],
		
		'SECUNDARIA' => [
			"21S1"   => ['83050120319', '1er Año - ISAE 2021'],
			"21S2"   => ['84721387672', '2do Año - ISAE 2021'],
			"21S3"   => ['83690447524', '3er Año - ISAE 2021'],
			"21S4"   => ['83751299693', '4to Año - ISAE 2021'],
			"21S5"   => ['89085143676', '5to Año - ISAE 2021'],
			"21SInf" => ['84946148032', 'Mod. Informática - ISAE 2021'],
			"21SNat" => ['83138483225', 'Mod. Cs. Naturales - ISAE 2021']
		]
	];

	function getAulas(){
		global $bdAULAs;
		$htmlGrupos = ''; 
		
		foreach ($bdAULAs as $nivel => $aulas) {
			$htmlAulas = ''; 
			foreach ($aulas as $aID => $aDats) {
				//Datos del Aula.
					list( $aZOOM, $aNOMBRE ) = $aDats;
				// Enlace del Aula.
					$aURL = "https://zoom.us/j/$aZOOM";
					$aLNK = "<a target='_blank' href='$aURL'>$aNOMBRE</a>";
				// Carga el Aula.
					$htmlAulas .= "<p class='align-center' mbr-fonts-style panel-text display-7'>$aLNK</p>";
			}
			// Carga el Grupo.
				$htmlGrupos .= getGrupo($nivel, $nivel, $htmlAulas);
		}
	return $htmlGrupos;		
	}
	
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


 ?>