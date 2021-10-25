<article class="blog-post">
    <?php if(is_single()) :  ?>
        <h2><?php the_title(); ?></h2>
    <?php else : ?>
        <a href="<?php the_permalink(); ?>">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
        </a>
    <?php endif; ?>
    <p class="blog-post-meta"><?php the_time('F j, Y g:i a'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>

    <?php if(is_single()) :  ?>
        <?php if(has_post_thumbnail()) : ?>
    <?php else : ?>
            <div class="post-thumb">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if(is_single()) :  ?>
        <?php the_content(); ?>
    <?php else : ?>
        <?php the_excerpt(); ?>
    <?php endif; ?>

    <?php if(is_single()) :  ?>
        <?php comments_template(); ?>
    <?php endif; ?>
</article>
