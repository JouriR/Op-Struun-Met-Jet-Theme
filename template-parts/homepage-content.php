<?php get_header(); ?>

<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/homepageHeader.jpg');"
     class="header-container container-fluid mb-4">
    <?php
    get_template_part('template-parts/navbar');
    ?>
    <div class="container-fluid container-sm">
        <div class="row header-text-row align-items-center">
            <div class="col">
                <div class="row">
                    <h1>Op Struun</h1>
                </div>
                <div class="row text-end">
                    <h1 class="colored-text-header">Met Jet</h1>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="container p-2 mt-lg-4 p-lg-0 main-container">
    <div class="row buffer-row"></div>
    <div class="row my-4 section">
        <div class="col-12 col-lg-6 my-lg-auto">
            <div class="row text-center text-lg-start"><h1><b>Natuurwandelingen</b></h1></div>
            <div class="row text-center text-lg-start"><h1><b>In Groningen en Drenthe</b></h1></div>
            <div class="row mb-2 p-3 p-lg-0">
                <p>
                    Bij Op Struun met Jet ben je aan het goede adres als je een fijne dag wilt wandelen in de natuur van
                    Groningen of Drenthe, als wilt genieten van een mooie route én van een lekkere zelfgemaakte lunch in
                    het veld. Op Struun met Jet biedt wandeldagen aan voor verschillende doelgroepen en van
                    verschillende afstanden. We gaan een fijne dag met elkaar op pad, starten met koffie en iets lekkers
                    aan het begin, Op Struun met Jet verzorgt de lunch onderweg en weet de route.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center mb-4">
                    <button class="homepage-button border-0 p-1 mb-4">Bekijk het aanbod</button>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="col-8 col-lg-6 p-4 p-lg-0 align-items-end justify-content-center justify-content-lg-end">
            <div class="row text-center justify-content-end align-items-center">
                <img class="homepage-image float-start float-lg-end"
                     src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
            </div>
        </div>
    </div>
    <div class="row buffer-row"></div>
    <div class="row my-4 my-lg-4 text-center section">
        <div class="col-12 col-lg-6 d-none d-lg-block align-items-end justify-content-end">
            <div class="row my-4 my-lg-0 text-center">
                <img class="homepage-image float-start image-fit"
                     src="<?php echo get_template_directory_uri(); ?>/images/Jet-smaller.jpg" alt="jet">
            </div>
        </div>
        <div class="col-12 col-lg-6 my-lg-auto">
                <div class="row text-center text-lg-end"><h1><b>Over Mij</b></h1></div>
                <div class="row text-start text-lg-end mb-3 p-3 p-lg-0">
                    <p>
                        Mijn naam is Henriëtte van der Noord. Mijn grootste hobby is wandelen in de natuur, het liefst op zo
                        onverhard mogelijke paden. Daar haal ik mijn hart op, kom ik tot rust, ontspan ik en voel ik mij
                        gelukkig. Dat gun ik anderen ook zo en daarom organiseer ik wandeldagen met kleine groepen (maximaal
                        8) in Groningen en Drenthe voor Op Struun met Jet, mijn wandelbedrijf.
                    </p>
                </div>
                <div class="row mt-2 mt-lg-0 mb-4 mb-lg-4 text-center text-lg-end">
                    <div class="col-7"></div>
                    <div class="col-lg-5 p-0">
                        <a href="./about"><button class="homepage-button border-0 p-1">Lees Meer</button></a>
                    </div>
                    <div class="col"></div>
                </div>
        </div>
    </div>
    <div class="row my-4 section">
        <div class="col-12 col-lg-6 my-lg-auto">
            <div class="row text-center"><h1><b>Aanbod</b></h1></div>
            <div class="row text-start text-lg-start mb-2 p-3 p-lg-0">
                <p>
                    Mijn grootste hobby is wandelen in de natuur, het liefst op zo onverhard mogelijke paden. Daar haal
                    ik mijn hart op, kom ik tot rust, ontspan ik en voel ik mij gelukkig. Dat gun ik anderen ook zo en
                    daarom organiseer ik wandeldagen met kleine groepen (maximaal 8) in Groningen en Drenthe voor Op
                    Struun met Jet, mijn wandelbedrijf.
                </p>
            </div>
            <div class="row my-3">
                <div class="col-lg-4 text-center mb-4">
                    <button class="homepage-button border-0 p-1 mb-4">Bekijk het aanbod</button>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="col-8 col-lg-6 d-none d-lg-block p-4 p-lg-0 align-items-end justify-content-center justify-content-lg-end">
            <div class="row text-center justify-content-end align-items-center">
                <img class="homepage-image float-start float-lg-end image-fit"
                     src="<?php echo get_template_directory_uri(); ?>/images/paraplu.jpg" alt="paraplu">
            </div>
        </div>
    </div>
    <div class="row my-4 section text-center">
        <div class="row text-center d-block d-lg-none my-4"><h1><b>Fotogallerij</b></h1></div>
        <div class="row text-center px-2 px-lg-0 justify-content-center">
            <div class="col-12 col-lg-8 my-2">
                <div class="row d-block d-lg-none">
                    <img class="homepage-image float-end float-lg-none image-fit" src="<?php echo get_template_directory_uri(); ?>/images/bloemen.jpg"
                         alt="bloemen">
                </div>
                <div class="row d-none d-lg-block">
                    <img class="homepage-image d-block d-lg-none float-end float-lg-none image-fit" src="<?php echo get_template_directory_uri(); ?>/images/jet-bench.jpg"
                         alt="bloemen">
                    <img class="homepage-image-long d-none d-lg-block float-end float-lg-none image-fit" src="<?php echo get_template_directory_uri(); ?>/images/jet-bench.jpg"
                         alt="bloemen">
                </div>
                <div class="row my-3 text-start d-none d-lg-block">
                    <div class="col">
                        <h1><b>Fotogallerij</b></h1>
                    </div>
                </div>
                <div class="row mt-2 text-start d-none d-lg-block">
                    <div class="col">
                        <button class="homepage-button border-0 p-1 mb-4">Bekijk Alle Foto's</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 my-2 mb-4">
                <div class="row">
                    <div class="col-6 col-lg-12 p-lg-0">
                        <img class="homepage-image d-block d-lg-none float-start image-fit"
                             src="<?php echo get_template_directory_uri(); ?>/images/regen.jpg" alt="regen">
                        <img class="homepage-image-long-right d-none d-lg-block float-end image-fit"
                             src="<?php echo get_template_directory_uri(); ?>/images/regen.jpg" alt="regen">
                    </div>
                    <div class="col-6 col-lg-12 d-block d-lg-none">
                        <img class="homepage-image float-start image-fit"
                             src="<?php echo get_template_directory_uri(); ?>/images/paraplu.jpg" alt="paraplu">
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-block d-lg-none my-4 mt-lg-0">
            <div class="col-lg-4 text-center mb-4">
                <button class="homepage-button border-0 p-1 mb-4">Bekijk Alle Foto's</button>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class="row my-4 my-lg-4 text-center section">
        <div class="col-12 col-lg-6 d-none d-lg-block align-items-end justify-content-end">
            <div class="row my-4 my-lg-0 text-center">
                <img class="homepage-image float-start image-fit"
                     src="<?php echo get_template_directory_uri(); ?>/images/jet-bloemetjes.jpg" alt="jet-bloemen">
            </div>
        </div>
        <div class="col-12 col-lg-6 my-lg-auto my-lg-0">
            <div class="row text-center text-lg-end"><h1><b>Contact</b></h1></div>
            <div class="row text-center p-2 text-lg-end mb-3">
                <p>
                    Wilt u graag een wandeltocht aanvragen? Of heeft u
                    andere vragen? U kunt mij een bericht sturen via deze
                    pagina.

                </p>
            </div>
            <div class="row mt-2 mt-lg-0 mb-4 mb-lg-4 text-center text-lg-end">
                <div class="col-7"></div>
                <div class="col-lg-5 p-0">
                    <button class="homepage-button border-0 p-1">Lees Meer</button>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

    <div class="row text-center mt-4 mb-0 section">
        <h1><b>Recensies</b></h1>
    </div>
    <div class="row justify-content-center text-center">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                                   <div class="col-10 col-lg-6 p-2 mb-0 mb-lg-3 m-auto text-center justify-content-center">
                        <h3 class="review-name"><b>Barbara Razenberg</b></h3>
                        <p class="review-body">
                            Op Struun met Jet is als een warm bad.
                            Jet zorgt er voor dat iedereen een fijne tijd heeft door goed aan te voelen wat ieders behoeften zijn.
                            En wat is er fijner dan eens niet zelf op de route te hoeven letten maar je te laten leiden door een
                            bevlogen gids. En dan heb ik het nog niet eens gehad over de lunch. Die is fantastisch! Waarbij
                            ook
                            rekening wordt gehouden met mensen die vegetarisch zijn...
                        </p>
                    </div>
                       </div>
                <div class="carousel-item">
                    <div class="col-10 col-lg-6 mb-0 mb-lg-3 p-2 text-center m-auto justify-content-center">
                        <h3 class="review-name"><b>Marije van der Dam</b></h3>
                        <p class="review-body">
                            Als je in goed gezelschap, met een lekkere lunch onderweg een mooie route wilt lopen, ga dan op
                            struun
                            met Jet, want daar hoef je alleen maar zelf te lopen, de rest wordt voor je geregeld.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-10 col-lg-6 mb-0 mb-lg-3 p-2 text-center m-auto justify-content-center">
                        <h3 class="review-name"><b>Example User</b></h3>
                        <p class="review-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur dolorem eius
                            explicabo vero? Aperiam atque beatae doloremque eaque, earum excepturi fuga ipsum iure, labore
                            magnam magni maiores, modi mollitia pariatur perspiciatis placeat porro provident quae sequi
                            sint sit ut?
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <i class="fas fa-caret-left fa-5x carousel-caret"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <i class="fas fa-caret-right fa-5x carousel-caret"></i>
            </button>
        </div>
    </div>

    <div class="row mt-0 mt-lg-0 mb-4 mb-lg-4">
        <div class="col col-lg-4"></div>
        <div class="col col-lg-4 text-center mb-4">
            <button class="homepage-button border-0 p-1 mb-4 mt-2">Lees Alle Reviews</button>
        </div>
        <div class="col col-lg-4"></div>
    </div>
</div>


<?php get_footer(); ?>
</div>

</body>
</html>
