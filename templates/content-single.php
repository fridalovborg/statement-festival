<?php while (have_posts()) : the_post(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </div>

        <!-- FEATURE IMAGE -->
<!--         <div class="col-12 col-sm-12 col-md-12 col-lg-4">
            <?php //the_post_thumbnail('medium'); ?>
        </div> -->
    </div>
</div>
    
<?php endwhile; ?>