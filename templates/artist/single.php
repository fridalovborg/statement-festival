<?php 
/**
* Artists/single
* The single page for Artists
**/
?>
<?php while (have_posts()) : the_post(); ?>
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-1"></div>
		<div class="col-12 col-sm-12 col-md-6">
    		<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<div class="col-12 col-sm-12 col-md-4">
			<!-- FEATURE IMAGE -->
			<div class="feature-img">
				<?php the_post_thumbnail('small'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-1"></div>
		<div class="col-12 col-sm-12 col-md-10">

			<div class="artist-social-media">
				<?php if( get_field('spotify') ): ?>
				<a class="icons" href="<?php the_field('spotify'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/spotify.svg">
				</a>			
				<?php endif; ?>

				<?php if( get_field('sound_cloud') ): ?>
				<a class="icons" href="<?php the_field('sound_cloud'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/sound_cloud.svg">
				</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>