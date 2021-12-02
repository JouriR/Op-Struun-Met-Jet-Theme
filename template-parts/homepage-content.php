<?php get_header(); ?>

<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/homepageHeader.jpg');"
     class="header-container container-fluid mb-4">
    <?php
    get_template_part('template-parts/navbar');
    ?>
    <div class="container">
        <div class="row header-text-row align-items-center">
            <div class="col pl-0">
                <div class="row">
                    <h1>Op Struun</h1>
                </div>
                <div class="row">
                    <h1 class="colored-text-header">Met Jet</h1>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>


</div>

<div class="container p-4 mt-md-4 p-md-0 main-container">
    <div class="row buffer-row"></div>
    <div class="row my-4 section">
        <div class="col">
            <div class="row"><h1>Natuurwandelingen</h1></div>
            <div class="row"><h1>In Groningen en Drenthe</h1></div>
            <div class="row">
                <p>
                    Bij Op Struun met Jet ben je aan het goede adres als je een fijne dag wilt wandelen in de natuur van Groningen of Drenthe, als wilt genieten van een mooie route én van een lekkere zelfgemaakte lunch in het veld. Op Struun met Jet biedt wandeldagen aan voor verschillende doelgroepen en van verschillende afstanden. We gaan een fijne dag met elkaar op pad, starten met koffie en iets lekkers aan het begin, Op Struun met Jet verzorgt de lunch onderweg en weet de route.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="homepage-button border-0 p-1">Bekijk het aanbod</button>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="col align-items-end justify-content-end">
            <img class="homepage-image float-end" src="<?php echo get_template_directory_uri(); ?>/images/Jet-smaller.jpg" alt="jet">
        </div>
    </div>
    <div class="row buffer-row"></div>
    <div class="row my-4 section">
        <div class="col align-items-end justify-content-end">
            <img class="homepage-image float-start" src="<?php echo get_template_directory_uri(); ?>/images/heide.jpg" alt="heide">
        </div>
        <div class="col">
            <div class="row"><h1>Over Mij</h1></div>
            <div class="row">
                <p>
                    Mijn naam is Henriëtte van der Noord. Mijn grootste hobby is wandelen in de natuur, het liefst op zo onverhard mogelijke paden. Daar haal ik mijn hart op, kom ik tot rust, ontspan ik en voel ik mij gelukkig. Dat gun ik anderen ook zo en daarom organiseer ik wandeldagen met kleine groepen (maximaal 8) in Groningen en Drenthe voor Op Struun met Jet, mijn wandelbedrijf.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="homepage-button border-0 p-1">Lees Meer</button>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <div class="row buffer-row"></div>
    <div class="row my-4 section">
        <div class="col">
            <div class="row"><h1>Aanbod</h1></div>
            <div class="row">
                <p>
                    Mijn naam is Henriëtte van der Noord. Mijn grootste hobby is wandelen in de natuur, het liefst op zo onverhard mogelijke paden. Daar haal ik mijn hart op, kom ik tot rust, ontspan ik en voel ik mij gelukkig. Dat gun ik anderen ook zo en daarom organiseer ik wandeldagen met kleine groepen (maximaal 8) in Groningen en Drenthe voor Op Struun met Jet, mijn wandelbedrijf.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="homepage-button border-0 p-1">Bekijk het aanbod</button>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="col align-items-end justify-content-end">
            <img class="homepage-image float-end" src="<?php echo get_template_directory_uri(); ?>/images/paraplu.jpg" alt="jet">
        </div>
    </div>
    <div class="row text-center my-4">
        <h1>Recensies</h1>
    </div>
    <div class="row">
        <div class="col-md-6 p-2 text-center">
            <h3><b>Barbara Razenberg</b></h3>
            <p class="review-body">
                Op Struun met Jet is als een warm bad.
                Jet zorgt er voor dat iedereen een fijne tijd heeft door goed aan te voelen wat ieders behoeften zijn.
                En wat is er fijner dan eens niet zelf op de route te hoeven letten maar je te laten leiden door een
                bevlogen gids. En dan heb ik het nog niet eens gehad over de lunch. Die is fantastisch! Waarbij ook
                rekening wordt gehouden met mensen die vegetarisch zijn...
            </p>
        </div>
        <div class="col-md-6 p-2 text-center">
            <h3><b>Marije van der Dam</b></h3>
            <p class="review-body">
                Als je in goed gezelschap, met een lekkere lunch onderweg een mooie route wilt lopen, ga dan op struun
                met Jet, want daar hoef je alleen maar zelf te lopen, de rest wordt voor je geregeld.
            </p>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 text-center">
            <button class="review-button">Lees Meer Recensies</button>
        </div>
        <div class="col-lg-4"></div>
    </div>

    <?php get_footer(); ?>
</div>


</body>
</html>
