<?php get_header(); ?>

<?php
get_template_part('template-parts/navbar');
?>
<div class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>

            <article class="mt-5">
                <div class="row">
                    <div class="col-7">
                        <h1><?php the_title() ?></h1>
                    </div>
                    <div class="col-5"></div>
                </div>

                <div class="row">
                    <div class="col-7">
                        <details>
                            <summary>Wandeldagen</summary>
                            <div class="detailContent">
                                <p>
                                    Regelmatig biedt Op Struun met Jet een wandeling in Groningen
                                    of Drenthe aan via de website en sociale media (Facebook en Instagram).
                                    Deze wandelingen variëren in lengte (van ca. 9 km tot en met 20 km).
                                    Ga je met Jet op Struun, dan kun je het volgende verwachten.
                                    <br><br>
                                    Gezamenlijke ontvangst en kennismaking op de startlocatie onder het genot
                                    van koffie/thee en iets lekkers. Je ontvangt hier ook verdere informatie over de dag.
                                    <br><br>
                                    Jet weet de route, dus loop je mee, dan kan je volop genieten van al het moois om je heen.
                                    En gezellig kletsen met andere deelnemers als je wilt.
                                    <br><br>
                                    Onderweg genieten we met elkaar van een lekkere zelfgemaakte lunch, ook met koffie of thee.
                                    <br><br>
                                    We nemen de tijd, hebben geen haast. Ontspanning staat voorop.
                                    <br><br>
                                    Kosten €20 per persoon.
                                </p>
                            </div>
                        </details>

                        <details>
                            <summary>Maatwerk</summary>
                            <div class="detailContent">
                                <p>
                                    Heb je iets te vieren? Wil je een dagje met je team op pad? Bijpraten met je vriendenclub?
                                    En wil je eens iets anders dan thuis afspreken of in het café? Dat kan ook bij Op Struun met Jet.
                                    Neem contact op over de mogelijkheden.
                                    <br><br>
                                    Jij geeft je wensen aan en Jet stelt in overleg met jou de dag samen zodat je, als het zover is,
                                    alleen maar naar de afgesproken startlocatie hoeft te komen. De rest is dan helemaal voor je geregeld.
                                    Go with the flow.
                                    <br><br>
                                    De kosten hangen af van de wensen en het aantal deelnemers.
                                </p>
                            </div>
                        </details>

                        <details>
                            <summary>Meerdaagse</summary>
                            <div class="detailContent">
                                <p>
                                    Soms hebben mensen in plaats van een dagje wandelen, behoefte aan een paar dagen weg,
                                    de natuur in, lekker bijkomen. Als je alleen bent, doe je dat misschien niet zo snel.
                                    In een groepje is het veel leuker. De mensen die meegaan hebben in ieder geval de liefde
                                    voor wandelen, voor de natuur en het buiten zijn al met elkaar gemeen.
                                    <br><br>
                                    Hiervoor wordt een meerdaagse in Groningen én in Drenthe ontwikkeld.
                                </p>
                            </div>
                        </details>

                        <details>
                            <summary>Reisbegeleiding</summary>
                            <div class="detailContent">
                                <p>
                                    Biedt u een reis aan en heeft u een reisleider nodig? Henriëtte van der Noord van
                                    Op Struun met Jet is een ANVR-gecertificeerd reisleider. Neem contact op voor de mogelijkheden.
                                </p>
                            </div>
                        </details>
                        <hr class="detailBottomBorder">
                    </div>
                    <div class="col-5">
                        <img class="imgAanbod" src="<?= get_the_post_thumbnail_url() ?>" alt="Henriette">
                    </div>
                </div>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>