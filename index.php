<?php

if (is_front_page()) {
    get_template_part('template-parts/homepage-content');
} elseif (is_page('OVER MIJ')) {
    get_template_part('template-parts/over-mij-content');
} elseif (is_page('FOTOGALERIJ')) {
    get_template_part('template-parts/gallery-content');
} elseif (is_page('Contact')) {
    get_template_part('template-parts/contact-content');
} elseif (is_page('REVIEWS')) {
    get_template_part('template-parts/reviews-content');
} elseif (is_page('AANBOD')) {
    get_template_part('template-parts/aanbod-content');
} else {
    get_template_part('template-parts/404-content');
}
