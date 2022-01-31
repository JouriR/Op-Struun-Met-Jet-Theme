<?php get_header(); ?>

<?php
get_template_part('template-parts/navbar');
?>
<div class="contact-container content-container container">
    <div class="row mt-4">
        <div class="col-12 col-md-6 px-4 px-sm-0 left-section-contact">
            <div class="row text-center text-md-start my-4">
                <h2 class="text-uppercase fw-bold contact-title fw-bold">Contact</h2>
            </div>
            <div class="row my-4 d-flex">
                <div class="col-md-4 col-5 justify-content-center col-lg-2 d-flex">
                    <img class="float-start social-icons-contact my-auto"
                         src="<?php echo get_template_directory_uri(); ?>/images/email.png" alt="email">
                </div>
                <div class="col-md-8 col-7 col-lg-10 d-flex">
                    <div class="row my-auto">
                        <span class="contact-social-bold-text">E-mail:</span>
                        <span class="contact-social-subtext">
                             <span class="orange-border-bottom">
                           hvdnoord@ziggo.nl
                             </span>
                        </span>
                    </div>

                </div>
            </div>
            <div class="row my-4 d-flex">
                <div class="col-md-4 col-5 justify-content-center col-lg-2 d-flex">
                    <img class="float-start social-icons-contact my-auto"
                         src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="instagram">
                </div>
                <div class="col-md-8 col-7 col-lg-10 d-flex">
                    <div class="row my-auto">
                        <span class="contact-social-bold-text">Instagram</span>
                        <span class="contact-social-subtext">
                             <span class="orange-border-bottom">
                         @opstruunmetjet
                             </span>
                        </span>

                    </div>

                </div>
            </div>
            <div class="row my-4 d-flex">
                <div class="col-md-4 col-5 justify-content-center col-lg-2 d-flex">
                    <img class="float-start social-icons-contact my-auto"
                         src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook">
                </div>
                <div class="col-md-8 col-7 col-lg-10 d-flex">
                    <div class="row my-auto">
                        <span class="contact-social-bold-text">Facebook</span>
                        <span class="contact-social-subtext">
                             <span class="orange-border-bottom">
                        Op Struun Met Jet
                             </span>
                        </span>
                    </div>

                </div>
            </div>
            <div class="row my-4 d-flex">
                <div class="col-md-4 col-5 justify-content-center col-lg-2 d-flex">
                    <img class="float-start social-icons-contact my-auto"
                         src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="phone">
                </div>
                <div class="col-md-8 col-7 col-lg-10 d-flex">
                    <div class="row my-auto">
                        <span class="contact-social-bold-text">Telefoon</span>
                        <span class="contact-social-subtext">
                        <span class="orange-border-bottom">06-20 18 77 97</span>
                        </span>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-12 col-md-6 justify-content-center right-section-contact">
            <div class="row my-4">
                <h2 class="text-uppercase text-center text-md-start fw-bold contact-title fw-bold">Stuur een bericht</h2>
            </div>
            <form>
                <div class="mb-0">
                    <label for="inputEmail" class="form-label"></label>
                    <input type="email" placeholder="E-mail" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-0">
                    <label for="inputOnderwerp" class="form-label"></label>
                    <input type="text" placeholder="Onderwerp" class="form-control" name="onderwerp" id="inputOnderwerp">
                </div>
                <div class="mb-3">
                    <label for="inputBody" class="form-label"></label>
                    <textarea class="p-2 mt-4 form-control" placeholder="Bericht"  name="body" id="inputBody" cols="80" rows="10"></textarea>
                </div>
                <button class="homepage-button border-0 p-1">Verstuur</button>
            </form>
        </div>
    </div>


</div>
<?php get_footer(); ?>


