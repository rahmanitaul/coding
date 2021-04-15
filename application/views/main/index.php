    <!-- NAVBAR -->
    <nav class="navbar navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/v502_768.png') ?>"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Clients</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

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
            <div class="carousel-item carousel1 <?= $actives; ?>">
              <img src="<?= base_url('assets/img/').$c['gambar'] ?>" class="d-block w-100" >
              <div class="carousel-caption d-md-block">
                <h5><i>28 MILLION COMMUNITY</i></h5>
                <a href="#">LET'S WORK WITH US</a>
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

        <!-- END OF JUMBOTRON/CAROUSEL -->


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
              <div class="col-lg-2"><a href="#"><b>VIEW ALL</b></a></div>
            </div>

            <h5 class="text-danger"><b>What we can do for you</b></h5>

            <div class="row">

              <?php foreach ($products as $p) {?>
                <div class="col-lg-4">
                  <div class="card" style="background-color: <?= $p['bg'] ?>">
                    <center><img src="<?= base_url('assets/img/').$p['gambar'] ?>" class="card-img-top"></center>
                    <div class="wrapper">
                      <span><p><?= $p['caption'] ?> </p></span>
                    </div>
                  </div>
                </div>
                <?php $p++; } ?>
              </div>

              <!-- END OF PRODUCTS -->

              <hr><hr>

              <!-- CAROUSEL 2 -->

              <h1 class="what mb-0"><i><marquee scrollamount="18">WHAT MAKE US DIFFERENT</marquee></i></h1>

              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators newcarousel">

                  <?php 
                  $i = 0;
                  foreach ($newcarousel as $n) {

                    $actives = '';
                    if($i == 0){
                      $actives = 'active';
                    }

                    ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i; ?>" class="<?= $actives ?>" aria-current="true"></button>
                    <?php $i++; } ?>
                  </div>

                  <div class="carousel-inner">

                    <?php 
                    $i = 0;
                    foreach ($newcarousel as $n) {

                      $actives = '';
                      if($i == 0){
                        $actives = 'active';
                      }

                      ?>
                      <div class="carousel-item carousel2 <?= $actives; ?>">                  
                        <div class="row">
                          <div class="col-lg-5">
                            <img src="<?= base_url('assets/img/').$n['gambar'] ?>" class="d-block w-100" >
                            <div class="carousel-caption d-md-block">
                              <h5><i>10.000</i></h5>
                              <p><i>COMMUNITY LEADER</i></p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="carousel-caption d-md-block">
                              <p><?= $n['caption'] ?></p>
                            </div>
                          </div>

                        </div>

                      </div>
                      <?php $i++; } ?>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <i class="fas fa-arrow-circle-left" aria-hidden="true"></i>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                  <!-- END OF CAROUSEL 2 -->

                  <hr class="mt-5 mb-5">

                  <!-- SERVICES -->
                  <div class="services-section">
                    <div class="container services">
                      <div class="row">
                        <div class="col-lg-10"><h4><b>Services</b></h4></div>
                        <div class="col-lg-2"><a href="#"><b>VIEW ALL</b></a></div>
                      </div>

                      <h5 class="text-danger"><b>What we can do for you</b></h5>

                      <div class="row">

                        <?php foreach ($services as $s) {?>
                          <div class="col-lg-4">
                            <div class="card" >
                              <center><img src="<?= base_url('assets/img/').$s['gambar']?>" class="card-img-top"></center>
                              <div class="wrapper">
                                <span><p><?= $s['caption'] ?></p></span>
                              </div>
                            </div>
                          </div>
                          <?php $s++; } ?> 
                        </div>

                        <!-- END OF SERVICES -->

                        <hr class="mt-5"><hr>

                        <!-- CAROUSEL WITH SERVICE -->

                        <h1 class="works mt-2"><i><marquee scrollamount="18">OUR WORKS OUR WORKS OUR WORKS OUR WORKS OUR WORKS</marquee></i></h1>

                        <div id="carouselExampleCaptions" class="carousel slide3" data-bs-ride="carousel">
                          <div class="carousel-indicators newcarousel1">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item carousel3 active">
                              <div class="row">
                                <div class="col-lg-4">
                                  <img src="<?= base_url('assets/img/v691_2372.png')?>" class="d-block w-100">
                                  <div class="carousel-caption d-none d-md-block">
                                    <span><p>REXONA MEN SOCCER STARS</p></span>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <img src="<?= base_url('assets/img/v691_2366.png')?>" class="d-block w-100">
                                  <div class="carousel-caption d-none d-md-block">
                                    <span><p>BALI UNIITED FESTIVAL</p></span>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <img src="<?= base_url('assets/img/v733_1558.png')?>" class="d-block w-100">
                                  <div class="carousel-caption d-none d-md-block">
                                    <span><p>INDOMIE NEW VARIANT</p></span>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <i class="fas fa-arrow-circle-left" aria-hidden="true"></i>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <!-- END OF CAROUSEL WITH SERVICE -->

                        <hr>

                        <!-- CLIENTS -->
                        <div class="clients-section mb-5">
                          <div class="container services">
                            <div class="row">
                              <div class="col-lg-10"><h4><b>Clients</b></h4></div>
                              <div class="col-lg-2"><a href="#"><b>VIEW ALL</b></a></div>
                            </div>

                            <h5 class="text-danger"><b>Our happy clients</b></h5>

                            <div id="carouselExampleControls" class="carousel slide4" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item carousel4 active">
                                  <div class="row mb-5 mx-auto">
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_749.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_744.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_745.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_746.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_747.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_748.png')?>" class="d-block">
                                    </div>
                                  </div>
                                  <div class="row mb-5 mx-auto">
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_751.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_753.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_759.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_761.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_754.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_742.png')?>" class="d-block">
                                    </div>
                                  </div>
                                  <div class="row mb-5 mx-auto">
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_751.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_753.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_759.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_761.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_754.png')?>" class="d-block">
                                    </div>
                                    <div class="col-lg-2">
                                      <img src="<?= base_url('assets/img/v502_742.png')?>" class="d-block">
                                    </div>
                                  </div>

                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <i class="fas fa-arrow-circle-left" aria-hidden="true"></i>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </button>
                          </div>

                          <!-- END OF CLIENTS -->

                          <div class="endpart">
                            <center>
                              <h2 class="end mx-auto"><i><b>LET'S CREATE <u>CREATIVE PROJECTS</u></b></i></h2>
                            </center>

                            <a class="before mt-5" href="#">START PROJECT WITH US</a>
                          </div>
                          
                          