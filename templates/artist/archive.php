<?php 
/**
* Artist/archive
* The archive page for artists
**/
?>
<div class="container">
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<a class="artist-container" href="<?php the_permalink(); ?>">
					<h2 class="artist-title"><?php the_title(); ?></h2>
					<?php the_post_thumbnail( 'x-small', array('class' => 'img-fluid') ); ?>
				</a>
			</div>
		<?php endwhile; ?>
	</div>
</div>