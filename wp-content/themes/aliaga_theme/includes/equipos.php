<?

global $post;
$args = array('numberposts' => 20, 'category_name' => 'equipos' );
$posts = get_posts( $args );

 ?>

<!-- Paralax Effect Section -->
<? foreach ($posts as $key => $post) : setup_postdata($post); ?>
  <? if($post->ID == '200'): ?>
    <? $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
    <div style="position:relative;">
    <section id="bg-paralax" style="background:url(<?= $urlImage ?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left top-padding">
            <h2><?= get_the_title() ?></h2>
          <p></p>
          </div>
        </div>
      </div>
    </section>
  <? endif ?>
<? endforeach ?>


<!-- MAQUINAS-->
<? foreach (array_reverse($posts) as $key => $post) : setup_postdata($post); ?>
  <? if($post->ID != '200'): ?>
    <? $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
    <div id="equipos-altapresion" style="margin-bottom: 1em">
      <section id="responsive" class="top-padding">
          <div class="container-fluid">
            <div class="row responsive-pic">
              <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="600ms"> 
                <img src="<?= $urlImage ?>" alt="" class="img-responsive"> 
              </div>
              <div class="container wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="row">
                  <div class="col-md-6 col-sm-6 r-test">
                      <h4><?= get_the_title() ?></h4>
                      <?= get_the_content() ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>
  <? endif ?>
<? endforeach ?>