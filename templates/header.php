<div class="cookie-note">
    <?php if (pll_current_language() == 'sv') : ?>
        <p>Statement festival använder cookies för statisktik och analys för att optimera din webbplatsupplevelse. <a href="#" class="posts-btn cookie">Ok!</a></p>
    <?php endif; ?>
    <?php if (pll_current_language() == 'en') : ?>
        <p>Statement festial uses cookies for statistics and analysis to optimize your site experience. <a href="#" class="posts-btn cookie">Ok!</a></p>
    <?php endif ?>
</div>
<header class="banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png">
                </a>
            </div>
            <div class="col-12">
                <h5 class="festival-dates">31 Aug-1 Sep 2018</h5>
                <nav class="nav-primary">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                    endif;
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="header-background"></div>
<a href="#" class="mobile-menu-toggle">
    <img class="bars" src="<?php echo get_template_directory_uri() ?>/dist/images/bars.svg">
    <img class="times" src="<?php echo get_template_directory_uri() ?>/dist/images/times.svg">
</a>
<div class="menu">
    <div class="nav-mobile">
        <?php
        if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
    </div>
    <div class="menu-languages">
        <ul><?php pll_the_languages(); ?></ul>
    </div>
    <div class="social-media-mobile">
        <a href="https://www.instagram.com/statementfestival/"> <!-- Instagram icon -->
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/instagram.svg">
        </a>
        <a href="https://www.facebook.com/statementfestival/"> <!-- Facebook icon -->
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/facebook.svg">
        </a>
    </div>
</div>
<div class="menu-languages-desktop">
    <ul><?php pll_the_languages(); ?></ul>
</div>