<?

global $post;
$args = array('numberposts' => 20, 'category_name' => 'certificaciones' );
$posts = get_posts( $args );

?>

<!-- Paralax Effect Section -->
  <div style="position:relative;">
    <section id="bg-paralax2" style="background: url(<?= bloginfo('template_url') ?>/images/bg-p2.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left top-padding">
            <h1>Certificaciones</h1>
            <h5></h5>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  
<section class="section-padding padding">
<div class="container">
<div class="row">
  <div class="col-md-12 text-center">
  <p class="title">Nuestras</p>
    <h2 class="heading">Certificaciones</h2>
  </div>


  <? foreach(array_reverse($posts) as $key => $post): setup_postdata($post); ?>
    <? if($post->ID != "32" && $post->ID <= "134"): ?>
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
      <? foreach (array_reverse($posts) as $key => $post): setup_postdata($post);?>
        <? if($post->ID > 134): ?>
          <? $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
          <? 
            $pdf = get_attached_media('');
            $pdf = array_values($pdf);
          ?>
          <div class="col-md-3 col-sm-3 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="thinker-wrap"> 
              <div class="thinker-image">
                <img src="<?= $urlImage ?>" alt="ISO 9001" class="img-responsive">
                <div class="overlay">
                  <div class="overlay-inner">
                    <ul class="social-link">
                    <li><a href="<?= $pdf[1]->guid; ?>" target="_blank" class="text-center"><i class="fa fa-file-pdf-o"></i><span></span></a></li>
                  </ul>
                  </div>
                </div>
              </div>
              <h3><?= get_the_title() ?></h3>
              <small><?= get_the_content() ?></small>
            </div>
          </div>
        <? endif ?>
      <? endforeach ?>
    </div>
  </div>
</section>  