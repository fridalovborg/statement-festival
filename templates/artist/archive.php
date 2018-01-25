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
<?php $artistAll = get_the_post_thumbnail_url(); ?>
<div class="container">
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<a class="artist-container" href="<?php the_permalink(); ?>">
					<h2 class="artist-title"><?php the_title(); ?></h2>
					<div class="feature-img-artist" style="background-image: url('<?php echo $artistAll; ?>')"></div>
				</a>
			</div>
		<?php endwhile; ?>
	</div>
</div>