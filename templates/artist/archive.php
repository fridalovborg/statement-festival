<?php 
/**
* Artist/archive
* The archive page for artists
**/
?>
<?php 
$query = new WP_Query( array( 'post_type' => 'artist' ) );
$query->set( 'posts_per_page', '-1' );
?>
<div class="container">
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a class="artist-container" href="<?php the_permalink(); ?>">
					<h2 class="artist-title"><?php the_title(); ?></h2>
					<?php the_post_thumbnail( 'x-small', array('class' => 'square-img') ); ?>
				</a>
			</div>
		<?php endwhile; ?>
	</div>
</div>