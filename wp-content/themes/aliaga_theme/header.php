<? $uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<!doctype html>
<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>Aliaga Ingeniería</title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/icomoon-fonts.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/settings.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/jPushMenu.css">
<link href='https://fonts.googleapis.com/css?family=Raleway:100,200,300,400%7COpen+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/onepage.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/one-color.css">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/loader.css">

<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.png">

    
</head>

<body id="page-top" data-spy="scroll" data-target="#fixed-collapse-navbar" data-offset="120">

<div class="loader">
	<div class="spinner">
	  <div class="dot1"></div>
	  <div class="dot2"></div>

	</div>
</div>


<!-- Main-Navigation -->

 <header id="main-navigation" class="index5">
  <div id="navigation" class="affix">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
		  
		  <div class="row">
          <div class="col-md-6 col-md-offset-6">
            <div align="right">
              <br>
              <div class="lienzoHeader">
                 <a href="tel:+56 972139954" title="Llámenos"><i class="fa fa-phone green-text"></i> +56 972139954</a>
          
                  <a href="mailto:administracion@aliagaingenieria.cl" title="Escríbanos" class="hidden-xs">
                  <i class="fa fa-envelope green-text"></i> administracion@aliagaingenieria.cl</a>
              
                  <a href="http://aliagaingenieria.cl/webmail" target="_blank" class="facebook green-text" title="Acceder a Webmail"> <i class="fa fa-envelope-o"></i> Webmail</a>
              </div>
              
            </div>
          </div>
        </div>
        
      <ul class="top-right text-right ">
            <li><a href="#." class="facebook"></a></li>
		  <li><a href="#." class="twitter"></a></li>
            <li><a href="#." class="instagram"></a></li>

          </ul>
          
        <nav class="navbar navbar-default">
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="true"> 
            <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> 
            </button>
           <a class="navbar-brand" href="index.html"><img src="<?php bloginfo('template_url') ?>/images/logoaliaga.png" alt="logo" class="img-responsive"></a>
			  <a class="navbar-brand hidden-xs" href="index.html"><img src="<?php bloginfo('template_url') ?>/images/contratista.png" alt="logo" class="img-responsive"></a>
         </div>
        
          
        
            <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
				
			
				
			   <ul class="nav navbar-nav">
               <br><br>
				<!--
				 <li class="hidden">
                   <a class="page-scroll" href="#page-top"></a>
                 </li>
				-->

                <li class="<?php if($uri == 'http://localhost/aliaga_site/'){ echo "active";} ?>">
                  <a href="http://localhost/aliaga_site/" class="page-scroll">Home</a>
                </li>
                <li class="<?php if(strpos($uri, 'nosotros')){ echo 'active';} ?>">
                    <a class="page-scroll" href="nosotros">Nosotros</a>
                </li>
  
                <li class="<?php if(strpos($uri, 'servicios')){ echo 'active';} ?>">
                  <a href="servicios" class="page-scroll">Servicios</a>
                </li>
				  
				
                <!--<li>
                  <a href="equipos.html" class="page-scroll">Equipos</a>
                </li>-->				  
				  
                <li class="<?php if(strpos($uri, 'certificaciones')){ echo 'active';} ?>">
                  <a href="certificaciones" class="page-scroll">Certificaciones</a>
                </li>
                <li>
                  <a href="http://localhost/aliaga_site/index.php#contact" class="page-scroll">Contacto</a>
                </li>
              </ul>
            </div>
         </nav>
       </div>
       </div>
     </div>
  </div>
</header>