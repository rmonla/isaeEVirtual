<?php 
    include_once '_main/fxs.php';

    $appVer = "v1.3.41";

 ?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!-- <link rel="shortcut icon" href="assets/images/dticAulaVirtual.png" type="image/x-icon"> -->
  <meta name="description" content="">
  <meta http-equiv="Refresh" content="150"/>
  
  <title>Aulas Virtuales - ISAE</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<body>
  <section class="accordion1 cid-rKzC2nyguD" id="accordion1-0">
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="section-head text-center space30">
                    <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2"
                    >Aulas Virtuales - ISAE</h2>
<!--                     <div class="align-right"><a href='indexV2.php'><?php echo $appVer; ?></a></div>
 -->                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_0" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    
                    <div class="card"> <!-- Nivel Primario -->
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#PreIng_0" aria-expanded="false" aria-controls="PreIng">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    Nivel Primario
                                  </h4>
                              </a>
                          </div>
                        <div id="PreIng_0" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_0">
                            <div class="panel-body p-4">
                                
<!--                                 <p><center><a target='_blank' href='./21/preing' $aOnClick>Presentador Digital</a></center></p>
 -->                                
                                <?php  
                                  $lstA = ['21NP1', '21NP2', '21NP3', '21NP4', '21NP5','21NP6', '21NP7' ]; 

                                  // echo "<p>".getPList('PreIng')."</p>";
                                  // $lstA = ['PreIng_M', 'PreIng_F', 'PreIng_Q']; 
                                  foreach ($lstA as $a) echo getAula($a);
                                ?>

                              </div>
                          </div>
                    </div>
                    
                    <div class="card"> <!-- Nivel Secundario -->
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#collapse1_0" aria-expanded="false" aria-controls="collapse1">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    Nivel Secundario
                                  </h4>
                              </a>
                          </div>
                        <div id="collapse1_0" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_0">
                            <div class="panel-body p-4">
                                
                                <?php  
                                  $lstA = ['21NS1', '21NS2', '21NS3', '21NS4', '21NS5' ]; 

                                  foreach ($lstA as $a) echo getAula($a);
                                ?>

                              </div>
                          </div>
                    </div>
                    
                </div>
              </div>
          </div>
      </div>
    </section>


  <section class="engine"><a href="https://mobirise.info/a">online website builder</a></section>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175446358-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-175446358-1');


    
  </script>
  
</body>
</html>