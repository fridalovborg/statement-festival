<?php 
/**
* Posts/single
* The single page for posts
**/
?>
<div class="container">
	<div class="row">
		<?php while (have_posts()): the_post(); ?>
			<div class="col-12 col-sm-12 col-md-1 col-lg-3"></div>
			<div class="col-12 col-sm-12 col-md-10 col-lg-6">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<a class="icons" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/angle-left.svg"></a>
			</div>
			<div class="col-12 col-sm-12 col-md-1 col-lg-3"></div>
		<?php endwhile; ?>
	</div>
</div>