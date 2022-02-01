<?php get_header(); ?>

<?php
get_template_part('template-parts/navbar');
?>
<div class="about-container container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>

            <article>
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <h1><?php the_title() ?></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <img class="" 
                             src="<?= get_the_post_thumbnail_url() ?>" 
                             alt="Henriette"
                        >
                    </div>
                    <div class="col-6">
                        <?= get_the_content() ?>
                    </div>
                </div>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>