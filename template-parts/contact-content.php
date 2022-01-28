<?php get_header(); ?>

<?php
get_template_part('template-parts/navbar');
?>
<div class="contact-container content-container container">
    <div class="row my-4">
        <div class="col text-center">
            <h1 class="text-uppercase fw-bold">Contact</h1>
        </div>
        <div class="col text-start">
            <h1 class="text-uppercase fw-bold">Stuur een bericht</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
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
                    <textarea class="p-2" placeholder="Bericht" name="body" id="inputBody" cols="79" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


</div>
<?php get_footer(); ?>


