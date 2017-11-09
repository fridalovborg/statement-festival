<?php 
/**
* Artists/single
* The single page for Artists
**/
?>
<div class="container">
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
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
			<div class="col-12 col-sm-12 col-md-1"></div>
		<?php endwhile; ?>
	</div>
</div>