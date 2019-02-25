<?

global $post;
$args = array( 'category_name' => 'certificaciones' );
$posts = get_posts( $args );

?>

<!-- Paralax Effect Section -->
<? foreach($posts as $key => $post):  setup_postdata($post); ?>
  <? if($post->ID == "32"): ?>
  <? $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
  <div style="position:relative;">
    <section id="bg-paralax2" style="background: url(<?= $urlImage ?>)">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left top-padding">
            <h1><?= mb_strtoupper(get_the_title()) ?></h1>
            <h5><?= get_the_content(); ?></h5>
          </div>
        </div>
      </div>
    </section>
  </div>
  <? endif ?>
<? endforeach ?>
	
	
<section class="section-padding padding">
<div class="container">
<div class="row">
  <div class="col-md-12 text-center">
  <p class="title">Nuestras</p>
    <h2 class="heading">Certificaciones</h2>
  </div>


  <? foreach(array_reverse($posts) as $key => $post): setup_postdata($post); ?>
    <? if($post->ID != "32"): ?>
    <div class="col-md-4">
      <div class="pricing pricing_tenzin">
        <div class="pricing_item <?= $key%2 ? 'dark_gray' : 'active' ?>"><!-- dark_gray -->
          <h3 class="pricing_title"><?= get_the_title() ?></h3>
          <div class="pricing_price"></div>
    		      <ul class="pricing_list" style="min-height: 350px">
                  <?= get_the_content() ?>
              </ul>
        </div>
      </div>
    </div>
    <? endif ?>
  <? endforeach ?>
  </div>
</div>
            
</section>	
	

<!-- Certificados -->
<section id="thinkers" class=" padding-botom">
  <div class="container">
    <div class="row text-center">
		<div class="col-md-12 text-center">
		 <h2 class="heading">Certificados</h2>
			<p>Vea y Descargue nuestros certificados</p>
		</div>
		
		
		
      <div class="col-md-3 col-sm-3 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="300ms"> 
        <div class="thinker-wrap"> 
          <div class="thinker-image">
          	<img src="<?php bloginfo('template_url') ?>/images/ISO9001.png" alt="ISO 9001" class="img-responsive">
            <div class="overlay">
              <div class="overlay-inner">
                <ul class="social-link">
                <li><a href="files/CERTIFICADO_BUREAU_VERITAS_ISO_9001_HASTA_SEPT2018.pdf" target="_blank" class="text-center"><i class="fa fa-file-pdf-o"></i><span></span></a></li>
              </ul>
              </div>
            </div>
          </div>
          <h3>ISO 9001</h3>
          <small>SEPTIEMBRE 2018</small>
          
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="600ms"> 
        <div class="thinker-wrap"> 
          <div class="thinker-image">
          	<img src="<?php bloginfo('template_url') ?>/images/Ohsas-18001.jpg" alt="OHSAS" class="img-responsive">
            <div class="overlay">
              <div class="overlay-inner">
                <ul class="social-link">
                <li><a href="files/Certificado_OHSAS.pdf" class="text-center" target="_blank"><i class="fa fa-file-pdf-o"></i><span></span></a></li>
              
              </ul>
              </div>
            </div>
          </div>
          <h3>OHSAS 18001</h3>
          <small>ENERO 2020</small>
          
        </div>
      </div>
		
      <div class="col-md-3 col-sm-3 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="900ms"> 
        <div class="thinker-wrap"> 
          <div class="thinker-image">
          	<img src="<?php bloginfo('template_url') ?>/images/Regic.png" alt="REGIC" class="img-responsive">
            <div class="overlay">
              <div class="overlay-inner">
                <ul class="social-link">
                <li><a href="files/Certificado_ Regic_2019.pdf" class="text-center" target="_blank"><i class="fa fa-file-pdf-o"></i><span></span></a></li>
               
              </ul>
              </div>
            </div>
          </div>
          <h3>REGIC</h3>
          <small>MARZO 2019</small>
         
        </div>
      </div>
		
		
		
		<div class="col-md-3 col-sm-3 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="1000ms"> 
        <div class="thinker-wrap"> 
          <div class="thinker-image">
          	<img src="<?php bloginfo('template_url') ?>/images/Repro.png" alt="REPRO" class="img-responsive">
            <div class="overlay">
              <div class="overlay-inner">
                <ul class="social-link">
                <li><a href="files/Certificado_Repro_2019.pdf" class="text-center" target="_blank"><i class="fa fa-file-pdf-o"></i><span></span></a></li>
               
              </ul>
              </div>
            </div>
          </div>
          <h3>REPRO</h3>
          <small>MAYO 2019</small>
         
        </div>
      </div>
		
		
		
		
	<div class="col-md-3 col-sm-3 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="1200ms"> 
        <div class="thinker-wrap"> 
          <div class="thinker-image">
          	<img src="<?php bloginfo('template_url') ?>/images/ResolucionSanitaria.png" alt="RESOLUCIÓN SANITARIA" class="img-responsive">
            <div class="overlay">
              <div class="overlay-inner">
                <ul class="social-link">
                <li><a href="files/Resolucion_Sanitaria_Resudios_Peligrosos.pdf" class="text-center" target="_blank"><i class="fa fa-file-pdf-o"></i><span></span></a></li>
               
              </ul>
              </div>
            </div>
          </div>
          <h3>RESIDUOS PELIGROSOS</h3>
          <small>RESOLUCIÓN SANITARIA</small>
         
        </div>
      </div>
		
		
		
		
			<div class="col-md-3 col-sm-3 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="1300ms"> 
        <div class="thinker-wrap"> 
          <div class="thinker-image">
          	<img src="<?php bloginfo('template_url') ?>/images/ResolucionSanitaria.png" alt="RESOLUCIÓN SANITARIA" class="img-responsive">
            <div class="overlay">
              <div class="overlay-inner">
                <ul class="social-link">
                <li><a href="files/Resolucion_Sanitaria_Resudios_No_Peligrosos.pdf" class="text-center" target="_blank"><i class="fa fa-file-pdf-o"></i><span></span></a></li>
               
              </ul>
              </div>
            </div>
          </div>
          <h3>RESIDUOS NO PELIGROSOS</h3>
          <small>RESOLUCIÓN SANITARIA</small>
         
        </div>
      </div>
		
		
		
		<div class="col-md-3 col-sm-3 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="1300ms"> 
        <div class="thinker-wrap"> 
          <div class="thinker-image">
          	<img src="<?php bloginfo('template_url') ?>/images/SICEP.jpg" alt="SICEP" class="img-responsive">
            <div class="overlay">
              <div class="overlay-inner">
                <ul class="social-link">
                <li><a href="files/Sicep_2020.pdf" class="text-center" target="_blank"><i class="fa fa-file-pdf-o"></i><span></span></a></li>
               
              </ul>
              </div>
            </div>
          </div>
          <h3>SICEP</h3>
          <small>ENERO 2020</small>
         
        </div>
      </div>
		
		
		
		<div class="col-md-3 col-sm-3 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="1300ms"> 
        <div class="thinker-wrap"> 
          <div class="thinker-image">
          	<img src="<?php bloginfo('template_url') ?>/images/ISO90012015.png" alt="ISO 9001 2015" class="img-responsive">
            <div class="overlay">
              <div class="overlay-inner">
                <ul class="social-link">
                <li><a href="files/Certificado_ ISO_9001_2015_Abril_2019.pdf" class="text-center" target="_blank"><i class="fa fa-file-pdf-o"></i><span></span></a></li>
               
              </ul>
              </div>
            </div>
          </div>
          <h3>ISO 9001:2015</h3>
          <small>ABRIL 2019</small>
         
        </div>
      </div>
		
		
		
		
		
    </div>
  </div>
</section>	