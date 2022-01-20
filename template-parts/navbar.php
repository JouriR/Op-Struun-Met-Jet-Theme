<div class="container-fluid container-lg p-0 p-sm-0">
    <div class="row">
        <div class="col">
            <nav class="navbar <?php if(is_front_page()){
                echo 'nav-home navbar-dark';
            }
            ?> navbar-expand-lg navbar-light  bg-light">
                <div class="container-fluid p-0">
                    <a class="navbar-brand p-3" href="<?php echo home_url(); ?>">Op Struun Met Jet</a>
                    <button class="navbar-toggler m-2 mr-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <div class="buffer d-none d-sm-block w-50"></div>
                        <ul class="navbar-nav d-flex justify-content-end ms-auto mb-2 mb-lg-0">
                            <li class="nav-item p-2 p-sm-2 p-xl-1">
                                <a class="nav-link p-2 p-sm-2 p-xl-1 active" aria-current="page" href="<?php echo home_url(); ?>">Home</a>
                            </li>
                            <li class="nav-item p-2 p-sm-2 p-xl-1">
                                <a class="nav-link p-2 p-sm-2 p-xl-1" href="./about">Over Mij</a>
                            </li>
                            <li class="nav-item p-2 p-sm-2 p-xl-1">
                                <a class="nav-link p-2 p-sm-2 p-xl-1" href="./gallery">Fotogalerij</a>
                            </li>
                            <li class="nav-item p-2 p-sm-2 p-xl-1">
                                <a class="nav-link p-2 p-sm-2 p-xl-1" href="./aanbod">Aanbod</a>
                            </li>
                            <li class="nav-item p-2 p-sm-2 p-xl-1">
                                <a class="nav-link p-2 p-sm-2 p-xl-1" href="./reviews">Reviews</a>
                            </li>
                            <li class="nav-item p-2 p-sm-2 p-xl-1">
                                <a class="nav-link p-2 p-sm-2 p-xl-1" href="./contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</div>

