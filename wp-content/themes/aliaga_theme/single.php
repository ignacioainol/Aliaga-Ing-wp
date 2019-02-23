<?php while ( have_posts() ) : the_post(); ?>
	<? $gallery = get_post_gallery_images() ?>

	<? foreach($gallery as $imagen): ?>
		<li><img src="<?= $imagen ?>" alt=""></li>
	<? endforeach ?>

<?php endwhile; ?>