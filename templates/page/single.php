<?php 
/**
* Page/single
* The content for default template
**/
?>
<div class="container">
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-12 col-sm-12 col-md-1 col-lg-3"></div>
			<div class="col-12 col-sm-12 col-md-10 col-lg-6">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			<div class="col-12 col-sm-12 col-md-1 col-lg-3"></div>
		<?php endwhile; ?>
	</div>
</div>