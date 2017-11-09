<?php 
/**
* Posts/archive
* The archive page for posts
**/
?>
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-1 col-lg-3"></div>
		<div class="col-12 col-sm-12 col-md-10 col-lg-6">
			<h1 class="page-title"><?php wp_title(''); ?></h1>
			<?php while (have_posts()): the_post(); ?>
				<article <?php post_class(); ?>>
					<date><?php the_date(); ?></date>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<a class="posts-btn" href="<?php the_permalink(); ?>">Läs mer</a>
				</article>
			<?php endwhile; ?>
		</div>
		<div class="col-12 col-sm-12 col-md-1 col-lg-3"></div>
	</div>
</div>