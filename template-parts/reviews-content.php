<?php get_header(); ?>

<?php
get_template_part('template-parts/navbar');
?>
<div class="content-container container-fluid">
    <div class="row text-center reviewpage-title">
        <h1><?= the_title() ?></h1>
    </div>
    <?php
    $args = array(
        'post_type' => 'review_post_type',
        'post_status' => 'publish',
    );
    $posts = new WP_Query($args);
    // var_dump($posts);
    ?>
    <div class="review-container row">

        <?php
        if ($posts->have_posts()) :

            while ($posts->have_posts()) :
                $date = get_the_date('d-m-Y');
                $posts->the_post();
        ?>
                <div class="review col-sm-4 col-12">
                    <header class="review-name">
                        <h1 class="review-title"><?php the_title(); ?></h1>
                    </header>
                    <div class="post-date">
                        <h2><?php echo $date ?></h2>
                    </div>
                    <div class="review-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php
            endwhile;

        else : ?>

            <h2 style="color: red;">Er zijn helaas geen reviews gevonden...</h2>

        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>