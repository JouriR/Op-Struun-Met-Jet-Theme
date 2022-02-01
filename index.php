<?php

if (is_front_page()) {
    get_template_part('template-parts/homepage-content');
} elseif (is_page('OVER MIJ')) {
    get_template_part('template-parts/over-mij-content');
} else {
    get_template_part('template-parts/404-content');
}

