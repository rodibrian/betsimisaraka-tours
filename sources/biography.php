
  <?php require 'header.php'; ?>

   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Biographie</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Image-Tab-Gallery-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Ultimate-Testimonial-Slider.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Gallery-With-Fanctbox-T1.css">

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Acceuil</a></li>
          <li>Biographie</li>
        </ol>
        <h2>Plus d'informations</h2>

      </div>
    </section>


    <div class="container-fluid top-container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-4 offset-xl-2" data-aos="fade-right" data-aos-delay="150">
                <div class="img-container"><img class="rounded" id="expandedImg" style="width:100%" src="https://bit.ly/2NX0WIp">
                    <div id="imgtext"></div>
                </div>
                <div class="row img-row" style="padding-right: 10px;padding-left: 10px;">
                    <div class="col column"><img class="img-thumbnail img-fluid" src="https://bit.ly/2NX0WIp" onclick="myFunction(this);" alt="image 1"></div>
                    <div class="col column"><img class="img-thumbnail img-fluid" src="https://bit.ly/3e1lfz9" onclick="myFunction(this);" alt="image 2"></div>
                    <div class="col column"><img class="img-thumbnail img-fluid" src="https://bit.ly/2NX0WIp" onclick="myFunction(this);" alt="image 3"></div>
                    <div class="col column"><img class="img-thumbnail img-fluid" src="https://bit.ly/3e1lfz9" onclick="myFunction(this);" alt="image 4"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4 offset-xl-0" id="describe" data-aos="fade-left" data-aos-delay="150">
                <h1 class="cPrimary">Betsimisaraka Tours</h1>
                <h6 class="text-dark italic">" Notre tours operateurs de toujours, pour vous satisfaire"</h6>
                <?php for ($i=0;$i<5;$i++) { ?><i class="bio-icon icon ion-star"></i><?php } ?>
                <hr>
                <p style="font-size: 20px;" class="d-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p style="font-size: 20px;">Quelques description sur le tours opérateur</p>
                <dl class="row">
  <dt class="col-sm-3">Listes Description</dt>
  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

  <dt class="col-sm-3">Euismod</dt>
  <dd class="col-sm-9">
    <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
    <p>Donec id elit non mi porta gravida at eget metus.</p>
  </dd>

  <dt class="col-sm-3">Malesuada porta</dt>
  <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
  <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

  <dt class="col-sm-3">Nesting</dt>
  <dd class="col-sm-9">
      Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
  </dd>
</dl></div>
        </div>
    </div>

    <!-- galerie -->

    <section id="gallery">
        <div class="container">
            <h1 data-aos="zoom-in" data-aos-delay="150" class="col-md-4 ml-auto mr-auto pl-5 pr-5 text-center text-uppercase cThird" style="border-bottom: 3px solid var(--c3);">Nos Galeries</h1>
            <p data-aos="zoom-in" data-aos-delay="150" class="text-center pb-5">Betsimisaraka Tours Galeries Photos</p>
            <div class="row">

                <?php 
                    $nPhotos = 12;
                    for ($i=1;$i<=$nPhotos;$i++) {
                ?>

                <div class="col-md-3 mb-4" data-aos="fade-in" data-aos-delay="<?= $i*100 ?>"><a href="https://picsum.photos/1600/900?random=<?= $i ?>" data-fancybox="images"><img class="img-fluid rounded img-thumbnail" src="https://picsum.photos/600/500?random=<?= $i ?>"></a></div>
                
                 <?php } ?>
               
            </div>
        </div>
    </section>

    <!-- end gallerie -->
   
    <p class="m-3 pt-5">
         <h1 data-aos="zoom-in" data-aos-delay="150" class="col-md-3 ml-auto mr-auto pl-5 pr-5 text-center text-uppercase cThird" style="border-bottom: 5px solid var(--c3);">Nos Commentaires</h1>
          <p data-aos="zoom-in" data-aos-delay="150" class="text-center pb-5 italic">Betsimisaraka Tours Commentaires</p>
    </p>
        
    <div class="carousel slide" data-ride="carousel" data-interval="10000" id="carousel-t">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="col-9 text-center mx-auto testimonial-content"><img class="rounded-circle" src="assets/img/test-man.jpg" width="100" >
                    <p class="text-center rating">5&nbsp;<i class="icon ion-star"></i></p>
                    <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.&nbsp;Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae."</em><br></p>
                    <p
                        class="signature">John D.</p>
                        <p class="text-center date">April 21, 2014<br></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content"><img class="rounded-circle" src="assets/img/test-woman.jpg" width="100">
                    <p class="text-center rating">5&nbsp;<i class="fa fa-star"></i></p>
                    <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.&nbsp;Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae."</em><br></p>
                    <p
                        class="signature">Jane D.</p>
                        <p class="text-center date">April 21, 2014<br></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-9 text-center mx-auto testimonial-content"><img class="rounded-circle" src="assets/img/test-male-pic.jpg" width="100">
                    <p class="text-center rating">5&nbsp;<i class="fa fa-star"></i></p>
                    <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.&nbsp;Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae."</em><br></p>
                    <p
                        class="signature">John D.</p>
                        <p class="text-center date">April 21, 2014<br></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content"><img class="rounded-circle" src="assets/img/test-female-pic.jpg" width="100">
                    <p class="text-center rating">5&nbsp;<i class="fa fa-star"></i></p>
                    <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.&nbsp;Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae."</em><br></p>
                    <p
                        class="signature">Jane D.</p>
                        <p class="text-center date">April 21, 2014<br></p>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-t" role="button" data-slide="prev"><i class="icon ion-android-arrow-dropleft-circle d-flex d-lg-flex justify-content-center align-items-center"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next"
                href="#carousel-t" role="button" data-slide="next"><i class="icon ion-android-arrow-dropright-circle d-flex d-lg-flex justify-content-center align-items-center"></i><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-t" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-t" data-slide-to="1"></li>
            <li data-target="#carousel-t" data-slide-to="2"></li>
            <li data-target="#carousel-t" data-slide-to="3"></li>
        </ol>
    </div>

  </main><!-- End #main -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="assets/js/Basic-fancyBox-Gallery.js"></script>
    <script src="assets/js/Image-Tab-Gallery-Horizontal.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Gallery-With-Fanctbox-T1.js"></script>


  <?php require 'footer.php'; ?>