<?php get_header(); ?>

<?php
get_template_part('template-parts/navbar');
?>
<div class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>

            <article class="mt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6">
                        <h1 class="title"><?php the_title() ?></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <img class="imgAbout" 
                             src="<?= get_the_post_thumbnail_url() ?>" 
                             alt="Henriette"
                        >
                    </div>
                    <div class="col-sm-12 col-md-6 content">
                        <?= get_the_content() ?>
                    </div>
                </div>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>