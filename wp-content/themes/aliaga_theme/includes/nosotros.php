<?
$args = array(
  'numberposts' => 1,
  'category_name' => 'nosotros',
  'order' => 'ASC' );
$postHeadNosotros = get_posts( $args );

$argsLast = array(
  'numberposts' => 3,
  'offset' => 1,
  'category_name' => 'nosotros',
  'orderby' => 'post_date',
  'order' => 'ASC',
  'include' => '',
  'exclude' => '',
  'meta_key' => '',
  'meta_value' =>'',
  'post_type' => 'post',
  'post_status' => 'publish',
  'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $argsLast, $output );

 ?>

<!-- Paralax Effect Section -->

<? foreach ($postHeadNosotros as $key => $post) : setup_postdata($post); ?>
  <? $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
  <div style="position:relative;">
    <section id="bg-paralax4" style="background:url(<?= $urlImage ?>)">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left top-padding">
            <h2><?= mb_strtoupper(get_the_title()) ?></h2>
            <h5><?= get_the_content(); ?></h5>
          </div>
        </div>
      </div>
    </section>
  </div>
<? endforeach ?>

  
<!-- NOSOTROS MISION VISION --> 
<section class="section-padding" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
        <p class="title">Nuestra Empresa</p>
        <h2 class="heading">NOSOTROS</h2>
      </div>

      <? foreach($recent_posts as $key => $post): setup_postdata($post);  ?>
      <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
        <? if($key == 0): ?>
          <span class="text-center"><i class="icon-icons9 color6"></i></span>
        <? elseif($key == 1): ?>
          <span class="text-center"><i class="icon-eye color1"></i></span>
        <? elseif($key == 2): ?>  
          <span class="text-center"><i class="icon-icons96 color6"></i></span>
        <? endif ?>
        <h4 class="color6"><?= get_the_title() ?></h4>
        <p align="justify"><?= get_the_content() ?></p>
      </div>
      <? endforeach ?>
 

    </div>
  </div>
</section>  
  

<!-- Descargar Presentación --> 
<section id="slogan" class="wow fadeIn animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeIn;"> 
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h5 class="hidden">hiddens</h5>
        <p class="pull-left">Descargue nuestra carta y presentación 2019</p>
        
        <a class="pull-right bounce-top" href="<?= bloginfo('template_url') ?>/files/Presentacion_Ingenieria_Aliaga_2019.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> Descargar Presentaci&oacute;n</a> 
        
        <a class="pull-right bounce-top" href="<?= bloginfo('template_url') ?>/files/carta_presentacion_ing.aliaga anio 2019_2.pdf" style="margin-right:1em" target="_blank"><i class="fa fa-file-pdf-o"></i> Descargar Carta</a>
        </div>
    </div>
  </div>
</section>  
  
  
  
<!-- INSTALACIONES -->
<section id="project" class="wow fadeInUp section-padding" data-wow-duration="500ms" data-wow-delay="900ms">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="title">Nuestras</p>
        <h2 class="heading">INSTALACIONES</h2>
        <div class="work-filter">
          <ul class="text-center">
             <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
             <li><a href="javascript:;" data-filter=".lota" class="filter">Lota</a></li>
             <li><a href="javascript:;" data-filter=".arauco" class="filter">Arauco</a></li>
             <li><a href="javascript:;" data-filter=".pinar" class="filter">Pinar</a></li>
             <li><a href="javascript:;" data-filter=".otro" class="filter">Otro</a></li>
          </ul>
     </div>
      </div>
    </div>
</div>
  
  
  <div class="container-fluid project-wrapper">
    <div class="zerogrid">
      <div class="wrap-container clearfix">
        <div class="row wrap-content">
          <div class="col-1-1">
         
        
    <div class="col-1-4 mix work-item arauco">
          <div class="wrap-col">
              <div class="item-container"> 
                <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/instalaciones/instalaciones_planta_1.jpg">
            <div class="overlay-inner">
            <h4 class="base">Nombre Instalación</h4>
                  <div class="line"></div>
            <p>Lugar</p>
                  </div>
          </a>
                <img src="<?php bloginfo('template_url') ?>/images/instalaciones/instalaciones_planta_1.jpg" alt="work"/> 
              </div>
            </div>
          </div>
        
        
           <div class="col-1-4 mix work-item lota">
                <div class="wrap-col">
                  <div class="item-container"> 
                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/instalaciones/instalaciones_planta_2.jpg">
            <div class="overlay-inner">
            <h4 class="base">Nombre Instalación</h4>
                  <div class="line"></div>
            <p>Lugar</p>
                  </div>
          </a>
                    <img src="<?php bloginfo('template_url') ?>/images/instalaciones/instalaciones_planta_2.jpg" alt="work"/>  
                  </div>
                </div>
           </div> 
            
         
              

             <div class="col-1-4 mix work-item pinar">
              <div class="wrap-col">
                <div class="item-container"> 
                <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/instalaciones/instalaciones_planta_3.jpg">
            <div class="overlay-inner">
            <h4 class="base">Nombre Instalación</h4>
                  <div class="line"></div>
            <p>Lugar</p>
                  </div>
          </a>
                <img src="<?php bloginfo('template_url') ?>/images/instalaciones/instalaciones_planta_3.jpg" alt="work"/>  
              </div>
            </div>
          </div>
      
      
      
      <div class="col-1-4 mix work-item otro">
              <div class="wrap-col">
                <div class="item-container"> 
                <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/instalaciones/instalaciones_planta_4.jpg">
            <div class="overlay-inner">
            <h4 class="base">Nombre Instalación</h4>
                  <div class="line"></div>
            <p>Lugar</p>
                  </div>
          </a>
                <img src="<?php bloginfo('template_url') ?>/images/instalaciones/instalaciones_planta_4.jpg" alt="work"/>  
              </div>
            </div>
          </div>
      
      
        </div>
      </div>
    </div>
  </div>
</section>
  
  
<section class="wow fadeInUp section-padding" data-wow-duration="500ms" data-wow-delay="900ms">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="title">video</p>
        <h2 class="heading">PRESENTACIÓN</h2>
  
      </div>
    </div>
  </div>
  
  
  <div class="container-fluid project-wrapper">


        <div class="row wrap-content">
          
         <div align="center">
           <video controls=""  name="media"><source src="http://aliagaingenieria.cl/video/video.mp4" type="video/mp4"></video>   
             
        </div>
      </div>
    </div>

</section>