<div class="row text-center mt-4 footer">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <script src="https://kit.fontawesome.com/fa658c22f4.js" crossorigin="anonymous"></script>
        <?php
        if (is_page('FOTOGALERIJ')) {?>
            <script src="<?php bloginfo('template_url'); ?>/js/masonry.js"></script>
        <?php } ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
        <footer>
            <div class="row pb-4">
                <div class="col text-center">
                    <a href="https://www.instagram.com/opstruunmetjet/"><img class="social-icons" src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="instagram"></a>
                </div>
                <div class="col text-center">
                    <a href="https://www.facebook.com/opstruunmetjet/"><img class="social-icons" src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="facebook"></a>
                </div>
                <div class="col text-center">
                    <a href="mailto:test@test.com"><img class="social-icons" src="<?php echo get_template_directory_uri(); ?>/images/gmail.svg" alt="mail"></a>
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer>
    </div>
    <div class="col-lg-3"></div>

</div>