<?php get_header(); ?>




  <div class="background1 vh-100 container-fluid">
    <div class="smaller row">
      <div class="icon-bar d-flex flex-column col-1">
        <a href="#section1" class="effetBar">01</a>
        <a href="#section2" class="effetBar">02</a>
        <a href="#section3" class="effetBar">03</a>
      </div>

      <div class="col-lg-2">

      </div>

      <div id="carouselExampleControls" style="height: 80vh;" class="d-flex flex-column justify-content-center carousel slide col-sm-12 col-md-10 col-lg-6" data-interval="false" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo bloginfo('template_directory'); ?>/img/slider1.png" class="d-block w-100" alt="planche à découper + couteau">
          </div>
          <div class="carousel-item">
            <img src="<?php echo bloginfo('template_directory'); ?>/img/slider2.png" class="d-block w-100" alt="hamburger">
          </div>
          <div class="carousel-item">
            <img src="<?php echo bloginfo('template_directory'); ?>/img/slider3.png" class="d-block w-100" alt="cupcake">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-lg-3">
    </div>
    <div class="smaller row align-items-center d-flex justify-content-between mt-5">
      <div class="col-sm-12 col-md-12 col-lg-4">
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="perf d-flex justify-content-center">
          and perfection is not a detail
        </div>

        <div class="text-center">
          <img src="<?php echo bloginfo('template_directory'); ?>/img/arrow.png" class="arrow rounded" alt="flèche vers le bas">
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="med">
          <button type="button" class="btn-book shadow-none">BOOK A TABLE</button>
        </div>
      </div>
    </div>
  </div>

  <div id="section1" class="vh-100 container-fluid">
    <h1 class="titre text-center">PERFECTION</h1>
    <div class="lorem text-center">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    </div>


    <div class="row align-items-center d-flex justify-content-between" style="height: 60vh">
      <div class="background-img-height col-sm-12 col-md-12 col-lg-3 d-flex h-75 d-inline-block" id="img1">
        <div class="align-self-center ml-auto mr-auto text-center">
          <p class="dessert-breakfast">DESSERTS</p>
          <hr size="1" width ="15%" color="#D49A63">
          <div class="lorembis">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>
      <div class="background-img-height col-sm-12 col-md-12 col-lg-3 d-flex h-100 d-inline-block" id="img2">
        <div class="align-self-end ml-auto mr-auto text-center mb-5">
          <p id="smoothies">SMOOTHIES</p>
          <hr size="1" width ="15%" color="white">
          <div id="lor">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>
      <div class="background-img-height col-sm-12 col-md-12 col-lg-3 d-flex h-75 d-inline-block" id="img3">
        <div class="align-self-center ml-auto mr-auto text-center">
          <p class="dessert-breakfast">BREAKFAST</p>
          <hr size="1" width ="15%" color="#D49A63">
          <div class="lorembis">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="test">
    <button type="button" class="btn-prep">CHECK OTHER OFFERS</button>
  </div>

<?php

   if ( have_posts()): the_post();?>
    <div id="section2" class="vh-100">
      <div class="container h-100 d-flex">
        <div class="jumbotron-fluid m-auto text-center" style="height:38vh; width:80vh; background-color: white;">
          <div id="contour">
            <h1 class="details"><?php echo the_title(); ?></h1>
            <p id="lor"><?php  echo the_content(); ?></p>
            <button type="button" class="btn-prep">PREPARATION OF OUR DISHES</button>
          </div>

        </div>
      </div>
    </div>
<?php
   else :
   endif; ?>


  <div id="section3" class="vh-100">

    <h1 class="titre text-center">HOW WE REACH THIS ?</h1>
    <div class="lorem text-center">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    </div>

    <div class="smaller row align-items-center d-flex justify-content-between mb-5" style="height: 40vh; width:100%">
      <div class="background-img-height col-sm-12 col-md-12 col-lg-3 d-flex h-75 d-inline-block" id="img4">
        <div class="align-self-center ml-auto mr-auto text-center">
          <p class="dfb">DIFFERENT LOCATIONS</p>
          <div class="lorembis">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>
      <div class="background-img-height col-sm-12 col-md-12 col-lg-4 d-flex h-100 d-inline-block" id="img5">
        <div class="align-self-center ml-auto mr-auto text-center">
          <p class="dfb">FRESH PRODUCTS</p>
          <div class="lorembis">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>
      <div class="background-img-height col-sm-12 col-md-12 col-lg-3 d-flex h-75 d-inline-block" id="img6">
        <div class="align-self-center ml-auto mr-auto text-center">
          <p class="dfb">THE BEST FROM THE BEGINNING</p>
          <div class="lorembis">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>
    </div>

    <div class="foot text-center">
      <img class="logodemerde" src="<? echo bloginfo('template_directory'); ?>/img/logo-b.png" alt="logo" width="5%" height="5%" class="mt-5">
      <hr id="hrdemerde"size=5 color="#cbcbcb" width="100%">
      <span id="gratia">Gratia Restaurant</span>
      <p class="lorembis mb-4 mt-2">Copyright 2016. All reserved by symu</p>
      <hr size=3 align="center" color="#cbcbcb" width="8%">
      <div class="smaller row my-4 justify-content-center">
        <a target="_blank" href="https://fr-fr.facebook.com/"><img src="<?php echo bloginfo('template_directory'); ?>/img/FB.png" alt="logo facebook" class="mx-2"></a>
        <a target="_blank" href="https://twitter.com/explore"><img src="<?php echo bloginfo('template_directory'); ?>/img/TW.png" alt="logo twitter" class="mx-2"></a>
        <a target="_blank" href="https://www.instagram.com/?hl=fr"><img src="<?php echo bloginfo('template_directory'); ?>/img/IG.png" alt="logo instagram" class="mx-2"></a>
      </div>
    </div>

  </div>




<?php get_footer(); ?>
