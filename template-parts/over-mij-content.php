<?php get_header(); ?>

<?php
get_template_part('template-parts/navbar');
?>
<div class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>

            <article class="mt-5">
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col-7">
                        <h1><?php the_title() ?></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">
                        <img class="imgAbout" 
                             src="<?= get_the_post_thumbnail_url() ?>" 
                             alt="Henriette"
                        >
                    </div>
                    <div class="col-7">
                        <?= get_the_content() ?>
                    </div>
                </div>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>