<?php 
	// Base de datos de Calendarios.
		$bdCal = [
			'Cols'       => 'idGoogleCal',
			'ICI5to'     => 'ps62t3hlmljku5ogtti3sct478',
			'ICI-1ro'    => 'tolk7hodqmgn7trhohtqfjgbn8',
			'ICI-2do'    => 'v424gp9t35n8k89r5hgk4op72s',
			'ICI-3ro'    => 'hsqlqftojq9qphv225rc10hk98',
			'ICI-4to'    => 'hqvfb691ua6irogbg4ug56o388',
			'ICI-6to'    => 'p41km38omaubbc1t2ssl8ik2v8',
			'PREINGRESO' => '90dlmf0j5c9a5h09jkhbojcuss',
			'EVENTOS'    => 'khar5qjvem7k27pek22ldqbkgg',
			'CATERM'     => 'ntb633871fphuvn3fmbphhgr4s',
			'POSG'       => '8a35a6oev6gk29cepiqp28opgc',
			'ICI'        => 'hjqemm2ul3vn4vr11hm1sude5k',
			'IEL'        => 'oa74s9bk4aukr86fdovh1eudr0',
			'IEM'        => 't7gaavtelsa9kanqripcbt4sjg'
		];



	function getIdCal($idcal){
		global $bdCal;
		return (isset($bdCal[$idcal]))? $bdCal[$idcal].'@group.calendar.google.com' : 0 ;
		// return (isset($bdCal[$idcal]))? $bdCal[$idcal].'%40group.calendar.google.com' : 0 ;
	}

	function getUrlCal($idcal, $html=0, $modo='AGENDA'){
		global $bdCal;
		$code = ($html) ? 'htmlembed' : 'embed' ;
		return (isset($bdCal[$idcal]))? "https://calendar.google.com/calendar/$code?src=".getIdCal($idcal)."&ctz=America%2FArgentina%2FLa_Rioja&mode=$modo" : 0 ;
	}

	// https://calendar.google.com/calendar/u/0/htmlembed?src=ps62t3hlmljku5ogtti3sct478@group.calendar.google.com&ctz=America/Argentina/La_Rioja&mode=AGENDA

	function getIframeCal($idcal=''){
		global $bdCal;
		return (isset($bdCal[$idcal]))? "<iframe src='".getUrlCal($idcal)."' style='border:solid 1px #777' width='100%' height='600' frameborder='' scrolling='no'></iframe>" : 0 ;
	}

	// echo getUrlCal('ICI');
	// echo getIframeCal('ICI');
 ?>

