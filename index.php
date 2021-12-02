<?php
if ( is_front_page() ) {
get_template_part( 'template-parts/homepage-content' );
} elseif ( is_page( 'About' ) ) {
    get_template_part( 'template-parts/about-content' );
} else {
    get_template_part( 'template-parts/404-content' );
}

