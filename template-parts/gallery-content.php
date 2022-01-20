<?php get_header(); ?>

<?php
get_template_part('template-parts/navbar');
?>
<div class="about-container container">
    <h1>Fotogallerij</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

</div>
<?php get_footer(); ?>
