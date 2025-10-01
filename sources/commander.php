
  <?php require 'header.php'; ?>
<style>
  .tab-pane {
    height: 50vh;
    overflow: hidden;
  }
</style>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Acceuil</a></li>
          <li>Nos Tarifs > Commander</li>
        </ol>
        <h2>Commander (NomTarifs)</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets/css/Background-motion1-1.css">
    <link rel="stylesheet" href="assets/css/Background-motion1.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Payment-Form.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">

    <!-- content site -->
    <div class="mt-5" style="background-image:url(&quot;https://cap.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fcap.2F2017.2F05.2F09.2F7ad85b2c-01d2-4324-a01a-26e340c2ee31.2Ejpeg/750x375/background-color/ffffff/quality/70/quels-sont-les-avantages-de-la-carte-visa-1142473.jpg&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);"></div>

    <div class="container py-5" data-aos="fade-up" data-aos-delay="150">

  <div class="row">
    <div class="col-lg-9 mx-auto">
      <div class="bg-white rounded-lg shadow-sm p-5">
        <!-- Credit card form tabs -->
        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
          <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                <i class="fa fa-credit-card"></i>
                                Carte è crédit
                            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                                <i class="fab fa-paypal"></i>
                                Paypal
                            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                <i class="fa fa-university"></i>
                                 Transfert Banquaires
                             </a>
          </li>
           <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-mobile" class="nav-link rounded-pill">
                                <i class="fa fa-mobile"></i>
                                  Mobile Money
                             </a>
          </li>
        </ul>
        <!-- End -->


        <!-- Credit card form content -->
        <div class="tab-content">

          <!-- credit card info-->
          <div id="nav-tab-card" class="tab-pane fade show active">
            <p class="alert alert-success">Opération avec succes</p>
            <form role="form">
              <div class="form-group">
                <label for="username">Nom Complet (Sur la carte)</label>
                <input type="text" name="username" placeholder="Votre nom complet" required class="form-control">
              </div>
              <div class="form-group">
                <label for="cardNumber">N° Carte</label>
                <div class="input-group">
                  <input type="text" name="cardNumber" placeholder="Numero de votre carte" class="form-control" required>
                  <div class="input-group-append">
                    <span class="input-group-text text-muted">
                                                <i class="fab fa-cc-visa mx-1"></i>
                                                <i class="fab fa-cc-amex mx-1"></i>
                                                <i class="fab fa-cc-mastercard mx-1"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label><span class="hidden-xs">Date d'Expiration</span></label>
                    <div class="input-group">
                      <input type="date" placeholder="MM" name="" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group mb-4">
                    <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                                                <i class="fa fa-question-circle"></i>
                                            </label>
                    <input type="text" required class="form-control">
                  </div>
                </div>



              </div>
              <button type="button" class="subscribe btn btn-success btn-block rounded-pill shadow-sm"> Confirmer  </button>
            </form>
          </div>
          <!-- End -->

          <!-- Paypal info -->
          <div id="nav-tab-paypal" class="tab-pane fade">
            <p>Paypal facilites votre payement en ligne</p>
            <p>
              <button type="button" class="btn btn-primary rounded-pill"><i class="fab fa-paypal mr-2"></i> Connexion à votre compte Paypal</button>
            </p>
            <p class="text-muted"><u class="text-primary">Contrat de licence: </u>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
             <p class="text-muted"><u class="text-primary">Autres informations: </u>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <!-- End -->

          <!-- bank transfer info -->
          <div id="nav-tab-bank" class="tab-pane fade">
            <h6>Details de votre compte banquaires</h6>
            <dl>
              <div class="form-group">
                <label for="username">Banques</label>
                <input type="text" name="username" placeholder="banques dans le monde" required class="form-control">
              </div>
            </dl>
            <dl>
              <label for="username">N° de compte</label>
                <input type="text" name="username" placeholder="Votre numero de compte" required class="form-control">
            </dl>
            <dl>
              <label for="username">IBAN</label>
                <input type="text" name="username" placeholder="X-0000000000" required class="form-control">
            </dl>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <button type="button" class="subscribe btn btn-success btn-block rounded-pill shadow-sm bold text-bolder"> Transferer  </button>
          </div>
          <!-- End -->

          <!-- mobile money info -->
          <div id="nav-tab-mobile" class="tab-pane fade">
            <h6>Details du payement</h6>
            <p class="mt-3 mb-3 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                
                <label class="mt-3">Votre mobile</label>
               <div class="input-group">
                  <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-phone"></i></div>
               </div>
               <select class="input-group form-control">
                 <option>Votre Opérateurs mobiles</option>
                 <option>Orange (+261 32)</option>
                 <option>Airtel (+261 33)</option>
                 <option>Telma (+261 34)</option>
               </select>
               <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="+261 00 00 000 00">
               </div>
               <label class="mt-3">Code visuel (<a class="label-success" onclick="cap()"><u>Essayer un nouveau code</u></a>)</label>
               <div class="input-group"> 
                  <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-lock"></i></div></div>
                   <input type="text"  id="capt" class="form-control" style="font-weight: bold;" id="inlineFormInputGroupUsername_" placeholder="">
                   <input type="text" class="form-control disable" id="inlineFormInputGroupUsername_" placeholder="Code visuel à refaire">
          </div>

          <p class="text-muted mt-3"><span class="text-bolder"><u>Termes de licence: </u><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div class="d-inline">
            <button type="button" class="subscribe btn btn-success btn-block rounded-pill shadow-sm bold text-bolder"><i class="fa fa-check"></i> Valider achat  </button>
            <button type="button" class="d-none subscribe btn btn-danger btn-block rounded-pill shadow-sm bold text-bolder"><i class="fas fa-times"></i> Annuler achat  </button></div>
          <!-- End -->
        </div>
        <!-- End -->

      </div>
    </div>
  </div>
</div></span></span></p></div></div>
        <div class="w-100 m-5 p-5"></div>
        
          <div class="col-md-8 ml-auto mr-auto mb-5 pb-5">
            <h1 class="text-dark text-center mt-5 pt-5" data-aos="fade-in">Note &amp; réferences du payement</h1>
        <hr><div class="reference col-11 mt-5 mr-auto ml-auto">
<dl class="row" data-aos="fade-up">
  <dt class="col-sm-3">Description lists</dt>
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
    <dl class="row">
      <dt class="col-sm-4">Nested definition list</dt>
      <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
    </dl>
  </dd>
</dl></div>
</div></div>

    <!-- end content-->

  </main><!-- End #main -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form.js"></script>
    <script type="text/javascript">
    function cap() {

      var alpha=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
                 ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
                 'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

      var a=alpha[Math.floor(Math.random()*62)];
      var b=alpha[Math.floor(Math.random()*62)];
      var c=alpha[Math.floor(Math.random()*62)];
      var d=alpha[Math.floor(Math.random()*62)];
      var e=alpha[Math.floor(Math.random()*62)];
      var f=alpha[Math.floor(Math.random()*62)];

      var sum=a + b + c + d + e + f;

      document.getElementById("capt").value=sum;
    }
    cap();
  </script>

  <?php require 'footer.php'; ?>