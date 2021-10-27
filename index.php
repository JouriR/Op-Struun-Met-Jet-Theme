<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>

<div class="container p-4 p-md-0 main-container">

    <div class="row my-4">
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
                    <button class="p-1">Bekijk het aanbod</button>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="col align-items-end justify-content-end">
            <img class="homepage-image float-end" src="<?php echo get_template_directory_uri(); ?>/images/Jet-smaller.webp" alt="facebook">
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
                Jet zorgt er voor dat iedereen een fijne tijd heeft door goed aan te voelen wat ieders behoeften zijn. En wat is er fijner dan eens niet zelf op de route te hoeven letten maar je te laten leiden door een bevlogen gids. En dan heb ik het nog niet eens gehad over de lunch. Die is fantastisch! Waarbij ook rekening wordt gehouden met mensen die vegetarisch zijn...
            </p>
        </div>
        <div class="col-md-6 p-2 text-center">
            <h3><b>Marije van der Dam</b></h3>
            <p class="review-body">
                Als je in goed gezelschap, met een lekkere lunch onderweg een mooie route wilt lopen, ga dan op struun met Jet, want daar hoef je alleen maar zelf te lopen, de rest wordt voor je geregeld.
            </p>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-lg-5"></div>
        <div class="col-lg-2 text-center">
            <button>Lees Meer Recensies</button>
        </div>
        <div class="col-lg-5"></div>
    </div>
    <div class="row text-center mt-4">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <?php get_footer(); ?>
        </div>
        <div class="col-lg-3"></div>

    </div>
</div>


</body>
</html>
