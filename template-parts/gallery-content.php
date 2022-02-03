<?php get_header(); ?>

<?php
get_template_part('template-parts/navbar');
?>
<div class="gallery-container content-container container-fluid">
    <div class="row px-0 photo-row text-center" data-masonry='{"percentPosition": true }'>

    <?php
    $query_images_args = array(
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
    );

    $query_images = new WP_Query($query_images_args);

    $images = array();
    foreach ($query_images->posts as $image) : {
        $images[] = wp_get_attachment_url($image->ID);

    ?>
        <div class="col col-md-6 col-lg-4 col-xl-3 my-1 p-1">
            <div class="row" data-masonry='{"percentPosition": true }'></div>
            <picture>
                <img class="photo grid-item p-1"
                     src="<?php echo wp_get_attachment_url($image->ID) ?>">
            </picture>
        </div>

<?php } endforeach ?>

    </div>

<?php get_footer(); ?>
