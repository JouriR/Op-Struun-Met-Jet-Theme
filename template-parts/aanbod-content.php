<?php get_header(); ?>

<?php
get_template_part('template-parts/navbar');
$image_thumbnail = get_the_post_thumbnail_url(); // Thumbnail niet meer beschikbaar na custom post loop
?>
<div class="container">
    <article class="mt-5">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h1 class="title"><?php the_title() ?></h1>
          </div>
          <div class="col-sm-12 col-md-6"></div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <?php $args = array(
                    'post_type' => 'aanbod_post_type',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                );
                $posts = new WP_Query($args);
                if ($posts->have_posts()) :
                    while ($posts->have_posts()) : $posts->the_post(); ?>
              
                        <details>
                            <summary><?= the_title() ?></summary>
                            <div class="detailContent">
                                <p>
                                    <?= the_content() ?>
                                </p>
                            </div>
                        </details>

                    <?php
                    endwhile;
                else : ?>

                    <h2 style="color: red;">Er is momenteel geen aanbod beschikbaar...</h2>

                <?php endif; ?>
                <hr class="detailBottomBorder">
            </div>
            <div class="col-sm-12 col-md-6">
                <img class="imgAanbod" src="<?= $image_thumbnail ?>" alt="Henriette">
            </div>
        </div>
    </article>
</div>
<?php get_footer(); ?>