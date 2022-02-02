<?php get_header();

if ( isset( $_POST['submit'] ) ) {
    $bericht = $_POST['bericht'];

    $to = get_option('admin_email');
    $subject = $_POST['onderwerp'];
    $txt = $_POST['bericht'];
    $headers = "From: <$bericht>". "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
    mail($to,$subject,$txt,$headers);
}


get_template_part('template-parts/navbar');
?>
<div class="contact-container content-container container">
    <div class="row mt-4">
        <div class="col-12 col-lg-6 px-4 px-sm-0 left-section-contact">
            <div class="row text-center text-md-start my-4">
                <div class="col-12 text-center text-lg-start">
                    <h2 class="text-uppercase fw-bold contact-title fw-bold">Contact</h2>
                </div>
            </div>
            <div class="row my-4 d-flex">
                <div class="col-md-4 col-5 justify-content-center col-lg-2 d-flex">
                    <img class="float-start social-icons-contact my-auto"
                         src="<?php echo get_template_directory_uri(); ?>/images/email.png" alt="email">
                </div>
                <div class="col-md-8 col-7 col-lg-10 d-flex">
                    <div class="row text-md-center text-lg-start my-auto">
                        <span class="contact-social-bold-text">E-mail:</span>
                        <span class="contact-social-subtext">
                             <span class="orange-border-bottom">
                                 <a class="contact-page-link" href="mailto:test@test.com">
                                  hvdnoord@ziggo.nl
                                 </a>
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
                    <div class="row text-md-center text-lg-start my-auto">
                        <span class="contact-social-bold-text">Instagram</span>
                        <span class="contact-social-subtext">
                             <span class="orange-border-bottom">
                                 <a class="contact-page-link" href="https://www.instagram.com/opstruunmetjet/">
                                 @opstruunmetjet
                                 </a>
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
                    <div class="row text-md-center text-lg-start my-auto">
                        <span class="contact-social-bold-text">Facebook</span>
                        <span class="contact-social-subtext">
                             <span class="orange-border-bottom">
                                 <a class="contact-page-link" href="https://www.facebook.com/opstruunmetjet/">
                                  Op Struun Met Jet
                                 </a>
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
                    <div class="row text-md-center text-lg-start my-auto">
                        <span class="contact-social-bold-text">Telefoon</span>
                        <span class="contact-social-subtext">
                        <span class="orange-border-bottom">
                            <a class="contact-page-link" href="tel:06-20 18 77 97">
                                06-20 18 77 97
                            </a>
                            </span>
                        </span>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-12 col-lg-6 justify-content-center right-section-contact">
            <div class="row my-4">
                <h2 class="text-uppercase text-center text-md-start fw-bold contact-title fw-bold">Stuur een bericht</h2>
            </div>
            <form name="frm" method="post" action="#">
                <div class="mb-0">
                    <label for="inputEmail" class="form-label"></label>
                    <input type="email" placeholder="E-mail" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-0">
                    <label for="inputOnderwerp" class="form-label"></label>
                    <input type="text" placeholder="Onderwerp" class="form-control" name="onderwerp" id="inputOnderwerp">
                </div>
                <div class="mb-3">
                    <label for="inputBericht" class="form-label"></label>
                    <textarea class="p-2 mt-1 form-control" placeholder="Bericht"  name="bericht" id="inputBericht" cols="80" rows="10"></textarea>
                </div>
                <div class="col-12 text-center">
                    <input type="submit" name="submit" value="Verstuur" class="homepage-button border-0 p-1 float-sm-end" />
                </div>
            </form>
        </div>
    </div>


</div>
<?php get_footer(); ?>


