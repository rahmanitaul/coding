

<!-- JUMBOTRON/CAROUSEL --> 

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <?php 

    $i = 0;
    foreach ($carousel as $c) {
      $actives = '';
      if($i == 0){
        $actives = 'active';
      }

      ?>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" class="<?= $actives ?>" aria-current="true"></button>
      <?php $i++; } ?>
    </div>
    <div class="carousel-inner"> 
      <?php 

      $i = 0;
      foreach ($carousel as $c) {
        $actives = '';
        if($i == 0){
          $actives = 'active';
        }

        ?>
        <div class="carousel-item <?= $actives; ?>">
          <img src="<?= base_url('assets/img/').$c['gambar'] ?>" class="d-block w-100" >
          <div class="carousel-caption d-md-block">
            <h5><i>28 MILLION COMMUNITY</i></h5>
            <a href="">LET'S WORK WITH US</a>
          </div>
        </div>
        <?php $i++; } ?>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--   END OF JUMBOTRON/CAROUSEL -->


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky">
      <div class="navbar-header">
        <a href="#" class="navbar-brand">
          <img src="<?= base_url('assets/img/v502_768.png') ?>">
        </a>
      </div>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#" class="coding-home">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link aboutus" href="#coding-aboutus">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link products" href="#coding-products">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link services" href="#coding-services">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link clients" href="#coding-clients">CLIENTS</a>
        </li>
      </ul>
      <div class="bars">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>

    </nav>
    <!-- END NAVBAR -->

    <!-- ABOUT US -->
    <div class="aboutus-section">
      <div class="container us">
        <p class="text-justify">Bali United Football Club Is an Indonesian proffesional club based in Gianyar, Bali. Bali United began operations in 2014 and continues to be of the highest tier in the Indonesian football competition, League 1. The club has a vision to grow the football industry in Indonesia through creating an ecosystem consisting of 4Cs namely the Club, Community, Corporation, and Country. <b class="text-danger">Staying true to this vision</b>, the football club launched a sports agency under the name United Creative, to always bring the <b class="text-danger ">GAME ON</b> beyond its own club.</p> 


        <p>Warm regards,</p>
        <img src="<?= base_url('assets/img/v502_1719.png') ?>">
        <hr class="mt-5">
      </div>
    </div>
    <!-- END OF ABOUT US -->

    <!-- PRODUCTS -->
    <div class="products-section">
      <div class="container products">
        <div class="row">
          <div class="col-lg-10"><h4><b>Products</b></h4></div>
          <div class="col-lg-1"><p class="text-danger"><b>VIEW ALL</b></p></div>
        </div>

        <h5 class="text-danger"><b>What we can do for you</b></h5>
      </div>
    </div>
<!-- END OF PRODUCTS -->