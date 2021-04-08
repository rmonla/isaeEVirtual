<?php 

    define('APPAUT', 'Ricardo MONLA <rmonla@gmail.com>');
    define('APPDEV', 'https://github.com/rmonla/isaeSitio');
    define('APPPUB', 'http://www.isae.edu.ar/sitio/ev21/aulas/');

    define('APPNOM', 'isaeSitio');
    define('APPDET', '

      ## Aulas virtuales de ISAE. ## 
      El objetivo principal es el de dar acceso a las clases no presenciales a los distintos integrantes de la comunidad educativa del Instituto Superior Albert Einstein.

      ');

    $logVERs = [
      '1.5.1' => 'Cambia nombres de aulas 1roA->2doB y 1roB->3roB.',
      '1.4.4' => 'Agrega URL al enlace APPVER.',
      '1.4.3' => 'Agrega versión en index.',
      '1.4.2' => 'Agrega appInfo.',
      '1.4.1' => 'Cambia nombres np0121->1er Grado [A] y np0021->1er Grado [B].',
      '1.3.43' => 'Agrega aulas nsinfo y nsnatu.',

      '1.3.1' => 'Inicia codificación de la versión 1.3'
    ];
    
    $vers = array_keys($logVERs);
    
    define('APPVER', $vers[0]);

 ?>
