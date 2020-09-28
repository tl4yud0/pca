<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/popup.css" />
    <link rel="stylesheet" href="css/contacto.css" />


    <title>Grupo PCA</title>
    
    <style>
        /* .col-sm {
            border: solid 1px red;

        } */
      </style>
  </head>
    <body>
       <!--  header-->
  
  <nav id="header" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
      <a href="index.html" class="navbar-brand" href="">
          <img style="width: 170px;" src="images/logo-header-pca.png" alt="Grupo PCA">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
                        
      <div class="collapse navbar-collapse " id="navbarSupportedContent"  >
        <div class="contenet-menu ">
              <div class="logos mt-2 mb-2">
                    
                        <img class="mr-1" src="images/logo-lloyds.jpg" alt="">
                   
                    <a href="https://proclaims.mx:8443/grupopca/">
                        <img class="ml-1" src="images/login.jpg" alt="">
                    </a>
              </div> 
              <div class="menu mb-2">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item pr-3">
                        <a class="nav-link" href="index.html#company">Company</a>
                      </li>
                      <li class="nav-item pr-3">
                        <a class="nav-link" href="index.html#services">Services</a>
                      </li>
                      <li class="nav-item pr-3">
                        <a class="nav-link" href="index.html#sinister">Sinister</a>
                      </li>
                      <li class="nav-item pr-3">
                        <a class="nav-link" href="quality-management.html">Quality Management</a>
                      </li>
                      <li class="nav-item pr-3">
                        <a class="nav-link" href="lloydsagency.html">LLOYD`S Agency</a>
                      </li>
                      <li class="nav-item pr-3">
                        <a class="nav-link activado" href="contact-us.php">Contac us</a>
                      </li>
                      <li>
                        <button
                          type="button"
                          class="btn btn-link"
                          data-toggle="modal"
                          data-target="#staticBackdrop">
                          <img style="width: 26px;" src="images/buscar.png" alt="lupa">
                        </button>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="staticBackdrop"
                          data-backdrop="static"
                          data-keyboard="false"
                          tabindex="-1"
                          aria-labelledby="staticBackdropLabel"
                          aria-hidden="true">
                          <div class="modal-dialog" id="search">
                            <div class="modal-content" style="background-color: #F8F9FA">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">
                                  Search in the site
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <div class="input-group mb-2">
                                  <input
                                    type="text"
                                    class="form-control"
                                    aria-label="Recipient's username with two button addons"
                                    aria-describedby="button-addon4"
                                    v-model="keywords">
                                  <div class="input-group-append" id="button-addon4">
                                    <button
                                      class="btn btn-primary"
                                      type="button"
                                      @click="searchUrl(keywords)">
                                      Search
                                    </button>
                                    <button
                                      class="btn btn-outline-secondary"
                                      type="button"
                                      @click="keywords = null, results = null">
                                      Clean
                                    </button>
                                  </div>
                                </div>
                                <p v-if="keywords && results">
                                  <b>Resultados para "{{keywords }}"</b>
                                  <br>
                                  <small>{{ results ? results.length : 0  }} results(s)</small>
                                </p>
                                <ul class="list-group">
                                  <li
                                    class="list-group-item"
                                    style="background-color: #F8F9FA"
                                    v-for="result in results">
                                    <button
                                      type="button"
                                      class="btn btn-link pl-0"
                                      @click="goToLink(result.url)">
                                      {{ result.name }}
                                    </button>
<!--
                                    <p>
                                      Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </p>
-->
                                  </li>
                                </ul>

                              </div>
                            </div>
                          </div>
                        </div>

                      </li>
                    </ul>
              </div>
        </div>
      </div>
    </div>
</nav>
<!-- / header-->

        <section id="idiomas" class="" >
    <div class="container-fluid  pt-3 pb-5">
        <div class="cont-language">
            <p>
              <a href="../contacto.php" class="espaniol"> Español </a> 
              |
              <a href="" class="english"> English </a>
            </p>
         </div>
 
    
  </div>
</section>


<section id="contacto" class="" >
      <div class="pt-3 pb-5">

      <div class="container" >
          <div class="row">
              <div class="col-12 col-md-12 col-lg-4 mb-4 sombra">
                  <div class="accordion" id="accordionExample">
                  <div class="card grupo" @click="initMap(0)">
                    <div class="card-header col-10" id="headingOne">
                        <button class="btn btn-link btn-block text-left  " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h2 style="font-size:18px">
                          Ciudad de México
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                    </div>
                    <div id="collapseOne" class="collapse show " aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body card-text">
                       <h4>Roberto López Vidrio</h4>
                       <p>Managing Director</p>
                       <h4>Julio C. López Sáinz</h4>
                       <p>Deputy Director</p>
                      </div>
                    </div>
                  </div>
                  <div class="card" @click="initMap(1)">
                    <div class="card-header col-10" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h2 style="font-size:18px">
                        Guadalajara
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                       <h4>Esfras Alejandro Pérez Sanchéz</h4>
                       <p>Associate director Guadalajara</p>
                      </div>
                    </div>
                  </div>
                  <div class="card" @click="initMap(2)">
                    <div class="card-header col-10" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h2 style="font-size:18px">
                        Monterrey
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <h4>L.A.E. Salvadore Rosas Romo</h4>
                       <p>Office manager Monterrey</p>
                      </div>
                    </div>
                  </div>
                  <div class="card" @click="initMap(3)">
                    <div class="card-header col-10" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <h2 style="font-size:18px">
                        Puebla
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <h4>Ing. Jose Uriel Alcaide Tirado</h4>
                       <p>Associate director Puebla</p>
                      </div>
                    </div>
                  </div>
                  <div class="card" @click="initMap(4)">
                    <div class="card-header col-10" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <h2 style="font-size:18px">
                        Veracruz
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <h4>Ing. Jose Uriel Alcaide Tirado</h4>
                       <p>Associate director Veracruz</p>
                      </div>
                    </div>
                  </div>
                  <div class="card" @click="initMap(5)">
                    <div class="card-header col-10" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <h2 style="font-size:18px">
                        Hermosillo
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <h4>Lic. Erasmo Moreno Martínez</h4>
                       <p>Associate director Hermosillo</p>
                      </div>
                    </div>
                  </div>
                  <div class="card" @click="initMap(6)">
                    <div class="card-header col-10" id="headingSeven">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <h2 style="font-size:18px">
                        Ciudad Obregón
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                        <h4>Lic. Dayanira Moreno M.</h4>
                       <p>Associate director Ciudad Obregón</p>
                      </div>
                    </div>
                  </div>
                  <div class="card" @click="initMap(7)">
                    <div class="card-header col-10" id="headingEight">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        <h2 style="font-size:18px">
                        Tijuana
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="card-body">
                        <h4>Ing. Hugo S. Monje</h4>
                       <p>Associate director Tijuana</p>
                      </div>
                    </div>
                  </div>
                  <div class="card" @click="initMap(8)">
                    <div class="card-header col-10" id="headingNine">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        <h2 style="font-size:18px">
                        Culiacán
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                      <div class="card-body">
                        <h4>Lic. Erasmo Moreno Martínez</h4>
                       <p>Associate director Hermosillo</p>
                      </div>
                    </div>
                  </div>
                  <div class="card" @click="initMap(9)">
                    <div class="card-header col-10" id="headingTen">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        <h2 style="font-size:18px">
                        Nuevo León
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                      <div class="card-body">
                        <h4>Christian Guzmán Carrera</h4>
                       <p>Associate director Nuevo León</p>
                      </div>
                    </div>
                  </div>
                  <div class="card" @click="initMap(10)">
                    <div class="card-header col-10" id="headingEleven">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        <h2 style="font-size:18px">
                        Mexicali
                        </h2>
                        <div  class="button-collapse"></div>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                      <div class="card-body">
                        <h4>Ing. Hugo S. Monje</h4>
                       <p>Associate director Tijuana</p>
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                  <div id="map" style="height: 750px"></div>
              </div>
              
          </div>
      </div>

    </div>
 </section>


 <section class="formulario_sec">
 <section id="Contacto" class="contact">
       <div class="container">
           <article class="contact-box row ">
               <div class="col-12 col-md-12 col-lg-4 mb-4 sombra">
                  <div class="accordion" id="accordionExample">
                  
                  
                 
                </div>
              </div>
               <div class="contact-details col-12 col-md-12 col-lg-8 mb-4 ">
               <form  method="post" id="contactform"  enctype="multipart/form-data">
                       <div class="container-form">
                            <h3 style>SEND US A MESSAGE</h3>
                            <p>Please fill out the following form to get in touch as soon as possible</p>
                              <div class="form-group">
                                <input  class="form-control" type="text" placeholder="Nombre"    name="name" required>
                              </div>
                              <div class="form-group">
                                <input class="form-control"  type="email" type="email" placeholder="Email" name="email" required>
                              </div>
                              <div class="form-group">
                                <input class="form-control"  type="text" type="email" placeholder="Asunto" name="asunto" required>
                              </div>
                              <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensaje"  placeholder="Mensaje"></textarea>
                              </div>
                             <!-- <input class="form-input"  type="text" placeholder="Nombre*"    name="name" required>
                             <input  class="form-input"  type="email" placeholder="Correo electrónico*" name="email" required>
                             <select  class="form-input" name="option" required>
                                <option value="" selected disabled="disabled">Escoge tu tipo de colaboración</option>
                                <option value="Voluntario">Voluntario</option>
                                <option value="Colaborador">Colaborador</option>
                                <option value="Afiliación">Afiliación</option>
                             </select>
                             <input class="form-input"  type="tel"  maxlength="10" name="phone" placeholder="Teléfono" required> -->
                       </div>
                       <div class="container-button mb-4">
                             <!-- <button class="contact--button" >Enviar</button> -->
                             <input name="submit" type="submit" value="Enviar" class="submit-btn btn" >
                        </div>

                       
                  </form>
                  <h2 class="contact-title thanks" >¡Gracias! 
We will get in touch with you as soon as possible.</h2> <p class="contact-p thanks">
Don't forget to check your spam</p>
                </div> 
            </article>
        </div>
        
    </section>
 </section>
   <!--footer-->
   <footer id="footer" class="pb-2 pt-2">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 pb-3 pt-3">
             <ul>
                <p class="footer-title">LINK DE INTERES</p>
                <li class="pb-1 pt-1"> <a class="footer-link" href="index.html">Home</a></li>
                <li class="pb-1 pt-1"> <a class="footer-link" href="index.html#company">Company</a></li>
                <li class="pb-1 pt-1"> <a class="footer-link" href="index.html#services">Services</a></li>
<!--                <li class="pb-1 pt-1"> <a class="footer-link" href="">Leyes Códigos</a></li>-->
                <li class="pb-1 pt-1"> <a class="footer-link" href="https://www.banxico.org.mx/tipcamb/tipCamIHAction.do">Exchange Rate $</a></li>
             </ul>
              
            </div>
            <div class="col-12 col-lg-4 pb-3 pt-3">
                <a href=""><img class="pr-4" src="images/instagram.jpg" alt=""></a>
                <a href=""><img src="images/linkedin.jpg" alt=""></a>
            </div>
            <div class="col-12 col-lg-4 pb-3 pt-3 text-right align-mobile-left">
              <p class="footer-title">CONTACT US</p>
              <a  href="contact-us.php"><img style="width: 110px;" class="pb-3 pt-2" src="images/logo-lloyds.svg" alt=""></a>
              <a href="https://www.proca.com.mx/english/AvisoPrivacidad/CompanyPolicyProcedures_PCA_LA-Guadalajara%20Mx(2018).pdf">
              <p class="footer-text pt-5">PCA Group - Policies and procedures</p></a>
            </div>
          </div>
        </div>
    </footer>



    <!--/footer-->
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript">
      $('#myCollapsible').on('hidden.bs.collapse', function () {
        // do something...
      })
      $('#myCollapsible').collapse({
        toggle: false
      })
    </script>
    <script src="js/registro.js"></script>
    <!-- Vue JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&language=es&key=AIzaSyBOjm1Md7I7Lx8w7ktBAisWYqFlC_zGxsw"></script>
    <script type="text/javascript">
      var app = new Vue({
        el: '#contacto',
        mounted(){
          this.initMap();
        },
        methods: {
          initMap(openMarker = null) {
            var map;
            var myLatLng = { lat: 24.0666877, lng: -102.6205 };
            var locations = [
              {
                title: 'Ciudad de México',
                position: {lat: 19.371721, lng: -99.192242},
                markup: '<h4>Ciudad de México</h4><p>Periférico Sur 1661, A-12 1001 (Torres de Mixcoac)<br>Col. Lomas de Los Plateros, Del. Álvaro Obregón<br>México DF, CP 01480<br>Tel/Fax: (52 55) 5680-6966</p>'
              },
              {
                title: 'Guadalajara',
                position: {lat: 20.6364319, lng: -103.4088479},
                markup: '<h4>Guadalajara</h4><p>Barracuda 3941, Col. Loma Bonita Sur,<br>Zapopan, Jalisco, México<br>Tel: (52 33) 3615 8038<br>Fax: (52 33) 3615 8154</p>'
              },
              {
                title: 'Monterrey',
                position: {lat: 25.7090533, lng: -100.3747607},
                markup: '<h4>Monterrey</h4><p>Del Gran Parque 225, Col. Cumbres 2o Sector<br>Monterrey, N.L. México. CP. 64610<br>Tel: (52 81) 2315 0879</p>'
              },
              {
                title: 'Puebla',
                position: {lat: 19.0491529, lng: -98.2147291},
                markup: '<h4>Puebla</h4><p>Avenida Juárez No.1706, Despacho #103,<br>Col. La Paz, Puebla, Pue.<br>Tel/ Fax: (52 22) 2249 0365</p>'
              },
              {
                title: 'Veracruz',
                position: {lat: 19.1494934, lng: -96.1573521},
                markup: '<h4>Veracruz</h4><p>Las Aguilas No. 172, Fracc Laguna Real,<br>Veracruz,  Veracruz. C.P 91790<br>Tel : (229) 286 0431</p>'
              },
              {
                title: 'Hermosillo',
                position: {lat: 29.0873329, lng: -110.9852682},
                markup: '<h4>Hermosillo</h4><p>Rincón de los Azulejos # 15 Col. Villa Satélite<br>Hermosillo, Sonora CP 83200<br>Tel: (52 662) 311 3506</p>'
              },
              {
                title: 'Ciudad Obregón',
                position: {lat: 27.4913982, lng: -109.9120177},
                markup: '<h4>Ciudad Obregón</h4><p>Bartolomé Delgado de León # 306<br>Col. Las Haciendas Ciudad Obregón,<br>Sonora CP 85064<br>Tel: (52 644) 413 0170</p>'
              },
              {
                title: 'Tijuana',
                position: {lat: 32.5019788, lng: -116.9038801},
                markup: '<h4>Tijuana</h4><p>Calle Boca del Lobo Oriente # 6612<br>Fracc. Los Lobos Tijuana, B.C. CP. 22207<br>Tel: (52 664) 275 1199</p>'
              },
              {
                title: 'Culiacán',
                position: {lat: 24.8363679, lng: -107.3750056},
                markup: '<h4>Culiacán</h4><p>Xicotencatl No. 3759 Col. Rosario Uzarraga<br>Culiacán, Sinaloa<br>Tel: (52 667) 296 4662</p>'
              },
              {
                title: 'León',
                position: {lat: 21.1398889, lng: -101.6943767},
                markup: '<h4>León</h4><p>Dr. Rodolfo González Hurtado No. 104A, Col. Los Paraísos<br>León, Gto. CP. 37320<br>Tel: (52 477) 391 86 36 37</p>'
              },
              {
                title: 'Mexicali',
                position: {lat: 32.6266873, lng: -115.5783104},
                markup: '<h4>Mexicali</h4><p>Av. Cuatro Ciénegas N° 2082 – 7 Col. Ex Ejido<br>Coahuila Mexicali, B.C. CP21360<br>Tel: (52 686) 564 6456'
              },
            ];

            map = new google.maps.Map(document.getElementById('map'), {
              zoom: 5,
              center: myLatLng
            });

            locations.forEach( (element, index) => {
                var marker = new google.maps.Marker({
                    position: element.position,
                    map: map,
                    title: element.title,
                    icon: element.icon,
                  });

                var information = new google.maps.InfoWindow({
                  content: element.markup
                });

                marker.addListener('click', function() {
                    information.open(map, marker);
                  });

                if(openMarker == index){
                  information.open(map,marker);
                }
              });
          }
        }
      });
    </script>
    <script type="text/javascript">
      var app = new Vue({
        el: '#search',
        data: {
          content: [
            {
              name: 'Página de Inicio',
              url: '/pca/index.html',
              words: 'página de inicio red de oficinas quienes somos misión visión valores transportes marítimo carga siniestros'
            },
            {
              name: 'Nosotros',
              url: '/pca/index.html#nosotros',
              words: 'nosotros '
            },
            {
              name: 'Servicios',
              url: '/pca/index.html#servicios',
              words: 'servicios'
            },
            {
              name: 'Siniestros',
              url: '/pca/index.html#siniestros',
              words: 'siniestros'
            },
            {
              name: 'Gestión de Calidad',
              url: '/pca/gestiondecalidad.html',
              words: 'gestión de calidad'
            },
            {
              name: "LLOYD's Agency",
              url: '/pca/lloydsagency.html',
              words: "somos LLOYD's agency conócenos datos mapa"
            },
            {
              name: "Contacto",
              url: '/pca/contacto.php',
              words: "contacto mensaje oficinas ciudad de méxico guadalajara monterrey puebla veracruz hermosillo ciudad obregón tijuana culiacán león mexicali"
            },
          ],
          results: null,
          keywords: null
        },
        mounted(){

        },
        methods: {
          searchUrl(text){
            if(text){
              this.results = this.content
                         .filter( item  => item.words.includes(text.toLowerCase()) );
            }
          },
          goToLink(url){
            window.location.href = url;
          }
        }
      });
    </script>
    </body>
</html