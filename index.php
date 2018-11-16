<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #000;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  h2 {
      margin: 10px 0 30px 0;
      letter-spacing: 0px;      
      font-size: 17px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(35%); /* make all photos black and white */ 
      width: 62% ;/* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 1000px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #FFFFFF;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #000000 !important;
  }
  .navbar-nav li a:hover {
      color: #2E2EFE !important;
  }
  .navbar-nav li.active a {
      color: #000 !important;
      background-color: #5882FA !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #000;
      background-color: #5882FA !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">  <img src="img/Letras Logo.png" class="img-responsive img-rounded "  width="110" height="50"></a>

    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li><a href="#band">Nosotros</a></li>
        <li><a href="#tour">Ubicanos</a></li>
        <li><a href="#contact">Contactanos</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ofrecemos
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#hola">Productos</a></li>
            <li><a href="#hola">Servicios</a></li>
          </ul>
        </li>
        <li><a href="index2.php"><span class="glyphicon glyphicon-user"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/gg.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>FARMACIA</h3>
          <p>descripcion</p>
        </div>      
      </div>

      <div class="item">
        <img src="img/gatitos.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>gatos</h3>
          <p>descripcion</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="img/u.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>promociones</h3>
          <p>descripcion</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>PET MARKET</h3>
  <img src="img/pet.jpg" class="img-rounded" width="500" height="330">
  <h2> <STrong>HISTORIA</STrong></h2>
   <p>Pet Market, nace en el año 2,010 con la intención de brindar un servicio de calidad a todas las mascotas que nos solicitan consentirlas de una manera diferente, brindando una atención personalizada. De ahi creamo nuestro slogan :</p>
 <p>PORQUE TU MASCOTA MERECE LO MEJOR!!</p>
 <p>En el año 2,011, se da la oportunidad de abrir nuestra primera tienda, donde podemos brindar un mejor servicio, contando con instalaciones idóneas y ofrecerle a nuestros clientes productos de buena calidad.</p>
 <p>Brindamos servicios de Grooming, Corte de Pelo y/o Baño, Grooming Medicados, Venta de Concentrados , Farmacia, Venta de Accesorios, Hospedaje 5 Estrellas, Chequeos Medicos, Consultas, Cirugías, Limpieza de Dientes, Laboratorio y Servicio a Domicilio.</p>
 <p>Hoy contamos con 2 tiendas, llevamos 6 años en el mercado donde hemos seleccionado al personal para brindarles una mejor atención y un servicio personalizado de buena calidad, un servicio que nos diferencia de los demas, buscamos que nuestros amigos de cuatro patas disfruten del servicio Grooming Spa, NO SEDAMOS a las mascotas, brindandamos cariño y mucha paciencia, lo que nos ha posicionado como el mejor servicio del sector.</p>
 <p>Nuestras instalaciones se encuentran adecuadas para que las mascotas puedan socializar, no utilizamos jaulas, para evitar stress en el tiempo que nos visitan, siempre con supervision profesional. Utilizamos productos 100% naturales, contamos con personal capacitado, Planes de mantenimiento Primium, Programas de Alimentación y Programas Profilacticos para garantizar la salud a tu mascota.
 </p>
 
  <div class="row">
    <div class="col-sm-20">
   <h2> <STrong>NUESTRA MISION</STrong></h2>
      <a href="#demo" data-toggle="collapse"> <p class="text-center"><strong>Click Aqui</strong></p><br></a>
      <div id="demo" class="collapse">
        <p>Poner al alcance de los cilentes un servicio Personalizado, donde podamos interactuar con los propietarios para que juntos brindemos una calidad de vida a las mascotas.</p>
     <br>
      </div>
    </div>
  
    <div class="col-sm-20">
    <h2> <STrong>NUESTRA VISION</STrong></h2>
      <a href="#demo3" data-toggle="collapse">
      <p class="text-center"><strong>Click Aqui</strong></p><br>
      </a>
      <div id="demo3" class="collapse">
        <p>Ser la tienda de mascotas que brinde el mejor servicio del sector manteniendo el posicionamiento que el cliente nos ha acreditado.
</p>

      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Sucursales</h3>
    <p class="text-center">Visitanos en cualquiera de nuestras sucursales<br> </p>
  
    <div class="col-sm-2"> </div>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/c2.jpg"  width="800" height="300">
          <p><strong>TIENDA  CENTRAL</strong></p>
          <p>11 Av. B 14-75 zona 17, Colonia Colegio de Maestros. Tel. (502)2258-4283 , (502)4211-6477</p>
              </div>
      </div>
     
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/c1.jpg"  width="800" height="300">
          <p><strong>SAN ANGEL</strong></p>
          <p>Boulervard Principal San Angel zona 2. Tel. (502)2289-6882 , (502)5411-0231</p>
                 </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contactanos</h3>


  <div class="row">
    <div class="col-md-4">
    <p><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDkwIDkwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA5MCA5MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGlkPSJGYWNlYm9va19feDI4X2FsdF94MjlfIiBkPSJNOTAsMTUuMDAxQzkwLDcuMTE5LDgyLjg4NCwwLDc1LDBIMTVDNy4xMTYsMCwwLDcuMTE5LDAsMTUuMDAxdjU5Ljk5OCAgIEMwLDgyLjg4MSw3LjExNiw5MCwxNS4wMDEsOTBINDVWNTZIMzRWNDFoMTF2LTUuODQ0QzQ1LDI1LjA3Nyw1Mi41NjgsMTYsNjEuODc1LDE2SDc0djE1SDYxLjg3NUM2MC41NDgsMzEsNTksMzIuNjExLDU5LDM1LjAyNFY0MSAgIGgxNXYxNUg1OXYzNGgxNmM3Ljg4NCwwLDE1LTcuMTE5LDE1LTE1LjAwMVYxNS4wMDF6IiBmaWxsPSIjMDAwMDAwIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
      PetMarketgt</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>  Guatemala, Guatemala</p>
      <p><span class="glyphicon glyphicon-phone"></span>  Emergencias Tel. (502)4752-93135</p>
      <p><span class="glyphicon glyphicon-envelope"></span>  Email: info@petmarketgt.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">Ofrecemos</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Producto</a></li>
    <li><a data-toggle="tab" href="#menu1">Servicios</a></li>
  
  </ul>

  <div id="hola"class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Vendemos:</h2>
      <img src="img/gatitos.jpg" class="img-responsive" style="width:100%">
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Realizamos</h2>
      <img src="img/peri.jpg" class="img-responsive" style="width:100%">
    </div>
   
  </div>
</div>

<!-- Image of location/map -->


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Web Page Made by      <a href="https://www.facebook.com/WernerOvalle" data-toggle="tooltip" title="werner"> <strong>  Werner Ovalle </strong>   </a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>



