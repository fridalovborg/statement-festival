<div class="container-fluid">
	<div class="row">
	    <div class="col-12">
	    	<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
