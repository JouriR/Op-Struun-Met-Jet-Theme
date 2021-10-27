<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/homepageHeader.webp');" class="header-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </nav>
</div>
