<article <?php post_class(); ?>>
	<date><?php the_date(); ?></date>
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	
	<a class="posts-btn" href="<?php the_permalink(); ?>">Läs mer</a>
</article>
