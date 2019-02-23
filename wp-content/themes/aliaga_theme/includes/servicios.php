<?
$args = array(
  'numberposts' => 1,
  'category_name' => 'servicios',
  'order' => 'ASC' );
$postHeadServicios = get_posts( $args );

$post_uno    = get_post(35);
$title_one   = $post_uno->post_title;
$content_one = $post_uno->post_content;

$post_dos    = get_post(38);
$title_dos   = $post_dos->post_title;
$content_dos = $post_dos->post_content;

$post_tres    = get_post(52);
$title_tres   = $post_tres->post_title;
$content_tres = $post_tres->post_content;

$post_four    = get_post(57);
$title_four   = $post_four->post_title;
$content_four = $post_four->post_content;

$post_five    = get_post(59);
$title_five   = $post_five->post_title;
$content_five = $post_five->post_content;

$post_six    = get_post(63);
$title_six   = $post_six->post_title;
$content_six = $post_six->post_content;

?>

<!-- Paralax Effect Section -->

<? foreach ($postHeadServicios as $key => $post) : setup_postdata($post); ?>
	<? $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
	<div style="position:relative;">
		<section id="bg-paralax3" style="background: url(<?= $urlImage ?>)">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-12 text-left top-padding">
		        <h2><?= mb_strtoupper(get_the_title()) ?></h2>
				  <h5><?= get_the_content() ?></h5>
		      </div>
		    </div>
		  </div>
		</section>
	</div>
<? endforeach ?>
	
<section id="responsive" class="top-padding">
  <div class="container-fluid">
    <div class="row responsive-pic">

      <div class="container wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
        <div class="row">

         <div class="col-md-6 col-sm-6 r-test list-group-item">
            <h3 class="magin30"><?= $title_one ?></h3>
            <ul class="r-item">
				<?= $content_one ?>
            </ul>
          </div>
			
		<div class="col-md-6 col-sm-6 r-test list-group-item" style="float: right">
            <h3 class="magin30"><?= $title_dos. " you was the first you be the last"; ?></h3>
            <p>Contrato vigentes en empresa Celulosa Arauco S.A.</p>
            <ul class="r-item">
              <?= $content_dos ?>
            </ul>

          </div>	
			
			
		
          <div class="col-md-6 col-sm-6 r-test list-group-item">
            <h3 class="magin30"><?= $title_tres ?></h3>
            <p>Contrato vigentes en Termoeléctrica Santa María Colbún Coronel</p>
           
            <ul class="r-feature">
				<?= $content_tres ?>
            </ul>

          </div>
			
						
			<!--municipalidad de arauco y lota cyrax here-->
			<div class="col-md-6 col-sm-6 r-test list-group-item">
	            <h3 class="magin30"><?= $title_four ?></h3>
	            <p>Contrato vigente en Municipalidad de Arauco y Lota</p>
	           
	            <ul class="r-feature">
	              <?= $content_four ?>
	            </ul>

	         </div>
			
			
		
			<div class="col-md-6 col-sm-6 r-test list-group-item" style="float: left">
            <h3 class="magin30"><?= $title_five ?></h3>
            <p>Considerar que nuestra empresa mantiene los siguientes estándares de
Seguridad, confiabilidad y Administración:</p>
			
	        <ul class="r-item">
				<?= $content_five ?>
	        </ul>

          </div>
			
			
		<!--essbio cyrax here-->
		<div class="col-md-6 col-sm-6 r-test list-group-item">
            <h3 class="magin30"><?= $title_six ?></h3>
            <p>Contrato vigente en la empresa Essbio S.A.</p>
           
            <ul class="r-feature">
              <?= $content_six ?>
            </ul>

          </div>
			
		
			
        </div>
      </div>
		
		
		<br>
		
			

		
		
		
    </div>
  </div>
</section>

<!-- ESTANDARES -->

	
	
	<section id="project" class="wow fadeInUp section-padding animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 900ms; animation-name: fadeInUp;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
      
        <h2 class="heading">Galeria</h2>

      </div>
    </div>
  </div>
  
  
  <div class="container-fluid project-wrapper" id="MixItUpF97D5F">
    <div class="zerogrid">
      <div class="wrap-container clearfix">
        <div class="row wrap-content">
          <div class="col-1-1">
         
          <div class="col-1-3 mix work-item brand" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                    <a class="fancybox-media overlay text-center" data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-1.JPG"></a>
                    <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-1.JPG" alt="work">  
                  </div>
                </div>
              </div>
			  
			  <div class="col-1-4 mix work-item brand" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                    <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-2.JPG"></a>
                 <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-2.JPG" alt="work">  
                  </div>
                </div>
              </div>
			  
              <div class="col-1-4 mix work-item" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-3.JPG"></a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-3.JPG" alt="work">  
                </div>
              </div>
          </div>
         
              <div class="col-1-4 mix work-item graphic" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
               <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-4.JPG">
						
					</a>
                    <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-4.JPG" alt="work">  
                  </div>
                </div>
              </div>
              <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                  <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-5.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-5.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			   <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                      <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-6.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-6.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			   <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                      <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-7.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-7.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			  
			  
			   <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-8.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-8.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			   <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                      <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-9.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-9.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			
			  
			  
		

      
			  
			    <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-12.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-12.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			    <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-13.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-13.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			     <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-10.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-10.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			   	
			  
			    <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-15.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-15.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			    <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-16.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-16.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			    <div class="col-1-5 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-11.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-11.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			    <div class="col-1-5 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-14.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-14.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			    <div class="col-1-3 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-22.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-22.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			  <div class="col-1-2 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-17.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-17.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-18.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-18.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			 
			  
			  <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-19.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-19.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			  <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-20.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-20.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			  <div class="col-1-4 mix work-item design" style="display: inline-block;">
                <div class="wrap-col">
                  <div class="item-container"> 
                     <a class="fancybox-media overlay text-center"  data-fancybox-group="gallery" href="<?php bloginfo('template_url') ?>/images/galeria/galeria-21.JPG">
						
					</a>
                   <img src="<?php bloginfo('template_url') ?>/images/galeria/galeria-21.JPG" alt="work">  
                </div>
              </div>
       		 </div>
			  
			  
			
			  
			  
			  
      </div>
    </div>
  </div>
</section>