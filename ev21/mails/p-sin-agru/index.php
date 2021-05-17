<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('SITE', 'http://www.isae.edu.ar/sitio/');
	define('URL', SITE.'ev21/mails/');
	
	$titu = "PRI-SIN-AGRU";
	$desc = "PRIMARIA - MAILS SIN AGRUPAR - ISAE 2021";
	
	$imag = SITE."images/logo01.jpg";

	$time = 1800;
	$dest = URL;

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/21/posg/emduciii?01

	echo <<<HTML

	<html>
		<head>
			<title>$titu</title>
			<meta name="description"   content="$desc">
			<meta property="og:title"  content="$titu">
			<meta property="og:image"  content="$imag">
			<meta http-equiv="Refresh" content="$time;url=$dest"/>
		</head>
		<body>
			<center>
				<p>
					<div">
						<div >
							<iframe frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSU3vxjRN4w4GRqlLnPZNCpbrdbgcteVJIOrKV0VJtzfTQ1cwDivCQyn9hgpaj03AZCPAeI9T8F_aAx/pubhtml?gid=380560768single=false&amp;widget=false&amp;headers=false"></iframe>
						</div>
					</div>	
				</p>
			</center>
		</body>
	</html>		

HTML;

?>

