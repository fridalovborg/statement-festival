<?php 
/**
* Artist/archive
* The archive page for artists
**/
?>
<?php 
$unlimited = array( 
	'post_type' => 'artist',
	'posts_per_page' => -1,
);
$query = new WP_Query( $unlimited );
?>
<div class="container">
	<div class="row">
		<?php while ( $query->have_posts()) : $query->the_post(); ?>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a class="artist-container" href="<?php the_permalink(); ?>">
					<h2 class="artist-title"><?php the_title(); ?></h2>
					<?php the_post_thumbnail( 'x-small', array('class' => 'square-img') ); ?>
				</a>
			</div>
		<?php endwhile; ?>
	</div>
</div>