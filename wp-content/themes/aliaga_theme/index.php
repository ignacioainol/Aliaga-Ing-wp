<?php 

global $post;
$args = array( 'category_name' => 'home' );
$posts = get_posts( $args );

 ?>


<?php get_header(); ?>

<section id="main-slider" class="layer-content-responsive">
  
  <div class="tp-banner-container ">
    <div class="tp-banner fullscreenbanner layer-content-responsive">      
      <ul>  <!-- SLIDE  -->
        
        <!-- SLIDE  -->
         <? foreach ($posts as $key => $post) : setup_postdata($post); ?>
          <? if($post->ID == "66"): ?>
           <? $gallery = get_post_gallery_images() ?>
           <? $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

           
          
         <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7">
      
           <img src="<?= $urlImage ?>" alt="" />

           <? $kosa = 0 ?>
           <? $helloween = 1 ?>
           
          <? foreach($gallery as $key => $imagen): ?>
             <div class="caption lfr" data-x="<?= $kosa+1 ?>00" data-y="400" data-speed="1200" data-start="3<?= $helloween?>00" data-easing="easeOutBack" style="z-index: 3;"><img src="<?= $imagen ?>" alt="" width="152" height="78" /></div>
         
             <? $kosa += 2 ?>
             <? $helloween += 1 ?>
          <? endforeach ?>
       
       
             
           <div>
            <!-- LAYER NR. 1 -->
           <p class="tp-caption sft tp-resizeme"
           data-x="left"
           data-y="130" 
           data-speed="500"
           data-start="1000"
           data-easing="Power3.easeInOut"
           data-elementdelay="0.1"
           data-endelementdelay="0.1"
           style="z-index: 5;">Bienvenido / Welcome
           </p>
        <!-- LAYER NR. 2 -->
           <h2 class="tp-caption fade tp-resizeme text-left"
           data-x="left"
           data-y="160" 
           data-speed="500"
           data-start="1500"
           data-easing="Power3.easeInOut"
           data-elementdelay="0.05"
           data-endelementdelay="0.1"
           style="z-index: 9;"><strong><?= get_the_title() ?> y algo mas</strong>
           </h2>
            <!-- LAYER NR. 3 --> 
           <p class="tp-caption sft tp-resizeme"
           data-x="left"
           data-y="230" 
           data-speed="500"
           data-start="2000"
           data-easing="Power3.easeInOut"
           data-elementdelay="0.1"
           data-endelementdelay="0.1"
           style="z-index: 5;">Más de 30 Años en Manteción Industrial 
           </p>

           </div>     
        </li>
        <? endif ?>
      <? endforeach ?>
  
      </ul>
    </div>
  </div>
</section>

  
  
<!-- Paralax Effect Section -->
<div style="position:relative;">
<section id="bg-paralax">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
     <p align="center"><img src="<?php bloginfo('template_url') ?>/images/contratista-white.png"></p> 
        <h4>SOMOS EL CONTRATISTA PERMANENTE DE</h4>
        <h3 class="magin30">CELULOSA ARAUCO Y CONSTITUCIÓN S.A.</h3>
      </div>
    </div>
  </div>
</section>

</div>
  
<!-- Maquinarias -->
<section id="thinkers" class="section-padding padding-botom">
  <div class="container">
    <div class="row text-center">
      <? foreach(array_reverse($posts) as $key => $post) : setup_postdata($post) ?>
        <? if($post->ID != "66"): ?>
          <? $gallery = get_post_gallery_images() ?>
          <div class="col-md-3 col-sm-3 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="300ms"> 
           <a href="equipos#<? if($post->ID == '106'){ echo 'equipos-altapresion';}else if($post->ID == '114'){ echo 'camiones-desobstructores';}else if($post->ID == '118'){ echo 'arriendo-de-camion-gruas';}else if($post->ID == '122'){ echo 'enami';} ?>"><h4><?= get_the_title() ?></h4></a>
              <? foreach($gallery as $key => $imagen): ?>
              <div class="thinker-wrap">
                  <div class="thinker-image">
                    <img src="<?= $imagen ?>" class="img-responsive">
                  </div>
              </div>
              <? endforeach ?>

          </div>
        <? endif ?>
      <? endforeach ?>
    
    </div>
  </div>
</section>  
  
  

<!-- Contacto -->
<section class="info-section" id="contact">
  <div class="row">
    <div class="col-md-6 block text-center wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="300ms">
      <div class="center">
        <p class="title">Nuestros medios de </p>
        <h2>Contacto</h2>
        
    <p align="left"><i class="fa fa-envelope-square"></i><strong> Casilla:</strong> N° 322, Ciudad de Arauco</p>
        <p align="left"><i class="fa fa-map-marker"></i><strong> Casa Matriz:</strong> Prolongación Cochrane N°18, Ciudad de Arauco, Chile</p>
    <p align="left"><i class="fa fa-map-pin"></i><strong> Casa Matriz:</strong> El Pinar, Parcela 9, al costado de Ruta 160</p>
    <p align="left"><i class="fa fa-map-pin"></i><strong> Casa Matriz:</strong> Población Benjamin Squella, Calle los Copihues N°8, Lota Bajo</p>
      
        <p align="left"><i class="fa fa-phone"></i><strong> Móvil:</strong>  +56 972 139 954</p>
    <p align="left"><i class="fa fa-phone-square"></i><strong> Móvil:</strong> +56 954 189 147</p>
        <p align="left"><i class="fa fa-envelope"></i><strong> Email:</strong> <a href="#.">garage@arauco.cl</a></p>
    <p align="left"><i class="fa fa-envelope"></i><strong> Email:</strong> <a href="#.">administracion@aliagaingenieria.cl</a></p>
        
      </div>
    </div>
    <div class="col-md-6 block light text-center wow fadeInRightBig" data-wow-duration="500ms" data-wow-delay="300ms">
      <div class="center">
        <p class="title"></p>
        <h2>Escríbanos</h2>
        <div id="messageError"></div>
       <form class="form-inline" id="formContact" action="<?php bloginfo('template_url') ?>/includes/sendemail.php" method="post">
          <div class="row">
            <div class="col-md-12 center"><div id="messageForm"></div> </div>
          </div>
          <input type="hidden" value="sendmail" name="sendmail">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
              <input type="text" class="form-control"  placeholder="Nombre Apellidos" name="nombre" id="nombre" required>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
              <input type="email" class="form-control"  placeholder="E-mail " name="email" id="email" required>
            </div>
            <div class="col-xs-12 col-md-12">
              <textarea placeholder="Message..." class="form-control" name="mensaje" id="mensaje"></textarea>
              <button type="submit" class="btn-black btn-blue bounce-green" id="btn_submitx"> Enviar</button>

              <div id="loadgif" style="display: none">
                <img src="<?php bloginfo('template_url') ?>/images/eclipse-load.gif" alt="">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
  <br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3176.1757725915754!2d-73.31412458469752!3d-37.24353687985977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669e5a8aa77583d%3A0xb1dfce3a532df8a1!2zQ29jaHJhbmUgMTgsIEFyYXVjbywgUmVnacOzbiBkZWwgQsOtbyBCw61v!5e0!3m2!1ses!2scl!4v1527704781422" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  <br>

<?php get_footer();  ?>