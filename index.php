<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: logovanje.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Opis strane">
    <meta name="keywords" content="teretana,trening,vezbanje">
    <meta name="author" content="Stefan Majkic">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous"/>


    <title>Viking Gym-Početna</title>
  </head>
  <body>
    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">   <!--navbar navbar-expand-lg navbar-light bg-light-->
       <div class="container-fluid">
        <a class="navbar-brand" href="#">Viking<br>GYM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ml-5 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Početna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="onama.html">O nama</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usluge
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="personalnitr.html">Personalni treninzi</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="iznajmljivanje.html">Prodaja opreme</a></li>
                <li><a class="dropdown-item" href="plantreninga.html">Plan treninga i zakazivanje termina</a></li>
                <li><a class="dropdown-item" href="ishranasupl.html">Ishrana i suplementi</a></li>
                <li><a class="dropdown-item" href="terapija.html">Terapija i oporavak</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galerija.html">Galerija</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontakt.html">Kontakt</a>
            </li>
            <li class="navitem">
            <a class="nav-link" href="shop.php">SHOP</a>
            </li>
          </ul>
          <ul class="navbar-nav mr-5">
          <li class="navitem">
            <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="card text-center bg-dark text-white mt-1">
        <img src="slike/dumbbell-1966247_1920.jpg" class="card-img" style="height: 500px;" alt="...">
        <div class="card-img-overlay mt-5" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
          <h5 class="card-title">Viking Gym</h5>
          <p class="card-text">Uvek uz Vas, zajedno postižemo nove ciljeve i nikad se ne predajemo</p>
          <small class="text" style="font-style: italic;">Remember what you want</small>
        </div>
      </div>
    </div>
      <div class="card-body text-center text-white bg-dark mt-3 mb-3">
        <h5 class="card-title">Ukratko o nama</h5>
        <p class="card-text mt-3">Bavimo se ovim poslom na profesionalnom nivou već 10 godina i svoja znanja smo do sada podelili hiljadama drugih ljudi. Koristimo sve najsavremenije tretmane i načine treninga i ishrane da bi se osećali što bolje. Nudimo širok spektar sprava za vežbanje i veliki prostor da bi se osećali prijatno i kao kod kuće. Neki od naših redovnih vežbača su postizali zavidne rezultate na domaćim, ali i regionalnim takmičenjima. Želimo da svaki dolazak u našu teretanu bude uživanje, a ne obaveza.</p>
        <a href="onama.html" class="btn btn-outline-danger">Detaljnije</a>
      </div>
    </div>
  <section id="kontakti">
    <div class="container">
      <div class="card border-danger text-white bg-dark mt-3 mb-3">
        <div class="row g-0">
          <div class="col-md-3">
          <img src="slike/dumbbells-2465478_1920.jpg" class="card-img" alt="...">
          </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Usluge</h5>
          <p class="card-text">Nudimo raznovrsne usluge koje se ne odnose isključivo na teretanu, već i na sporedne faktore koji utiču na Vaše telo i napredak, od treninga do terapija.</p>
          <a href="usluge.html" class="btn btn-outline-danger">Detaljnije</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  </section>
  <div class="card-group">
    <div class="card border-danger text-white bg-dark mb-3">
      <img src="slike/time-273857_1920.jpg" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Zakazivanje termina</h5>
        <p class="card-text">Nemojte odugovlačiti Vaš odlazak u teretanu, kontaktirajte nas putem našeg mejla ili društvenih mreža ili nam pošaljite poruku putem internet forme.</p>
        <a href="plantreninga.html" class="mt-auto btn btn-outline-danger">Detaljnije</a>
      </div>
    </div>
    <div class="card border-danger text-white bg-dark mb-3">
      <img src="slike/fitness-375472_1920.jpg" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Prodaja opreme</h5>
        <p class="card-text">Sada imate mogućnost da vežbate od kuće, a da se osećate kao da ste sa nama u teretani. Nudimo prodaju tegova i mnoštva druge opreme.</p>
        <a href="iznajmljivanje.html" class="mt-auto btn btn-outline-danger">Detaljnije</a>
      </div>
    </div>
    <div class="card border-danger text-white bg-dark mb-3">
      <img src="slike/capsule-1079838_1920.jpg" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Suplementi</h5>
        <p class="card-text">Pored ishrane veoma bitan deo treninga za ubrzan napredak i bolje rezultate. Nudimo široku ponudu raznih suplemenata. Pogledajte naš cenovnik.</p>
        <a href="ishranasupl.html" class="mt-auto btn btn-outline-danger">Detaljnije</a>
      </div>
    </div>
    <div class="card border-danger text-white bg-dark mb-3">
      <img src="slike/healthy-5506822_1920.jpg" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Ishrana i dijeta</h5>
        <p class="card-text">Nudimo mnoštvo stručnjaka i nutricionista koji su uvek spremni da sastave najbolji plan ishrane za Vas i vaše telo kako bi se osećali što bolje i raspoloženije. </p>
        <a href="ishranasupl.html" class="mt-auto btn btn-outline-danger">Detaljnije</a>
      </div>
    </div>
    <div class="card border-danger text-white bg-dark mb-3">
      <img src="slike/bag-1565402_1920.jpg" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Plan treninga</h5>
        <p class="card-text">Ukoliko niste u mogućnosti da radite sa personalnim trenerom nudimo Vam par besplatnih planova treninga da bi Vam početci bili lakši, jer znamo kako je biti početnik.</p>
        <a href="plantreninga.html" class="mt-auto btn btn-outline-danger">Detaljnije</a>
      </div>
    </div>
  </div>
  <section id="kontakti">
    <div class="container">
      <div class="card border-danger text-white bg-dark mt-3 mb-3">
        <div class="row g-0">
          <div class="col-md-3">
          <img src="slike/kettlebell-3293475_1920.jpg" class="card-img" alt="...">
          </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Personalni treninzi</h5>
          <p class="card-text">Ne znate odakle da počnete? Nikakav problem, na raspolaganju imamo mnogobrojne trenere i profesionalne fitnes instruktore koji će Vas izvesti na pravi put.</p>
          <a href="personalnitr.html" class="btn btn-outline-danger">Detaljnije</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  </section>
  <div class="container mb-3">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slike/people-2604149_1280.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Personalni treneri</h5>
          <a href="personalnitr.html" class="btn btn-outline-danger">Detaljnije</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="slike/gym-room-1180062_1280.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Grupni treninzi</h5>
          <a href="plantreninga.html" class="btn btn-outline-danger">Detaljnije</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="slike/spa-3184610_1280.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Terapije</h5>
          <a href="terapija.html" class="btn btn-outline-danger">Detaljnije</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</div>
  <footer>
    <div class="row text-center">
    <div class="col-12">
        <ul class="list-inline">
        <li class="list-inline-item">
              <a  href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
            </li>
            <li class="list-inline-item">
              <a  href="https://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            </li>
            <li class="list-inline-item">
              <a  href="https://twitter.com/twitter" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
            </li>
        </ul>
    </div>
      <div class="col-12">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="onama.html">O nama</a></li>
          <li class="list-inline-item"><a href="usluge.html">Usluge</a></li>
          <li class="list-inline-item"><a href="faq.html">Česta pitanja</a></li>
          <li class="list-inline-item"><a href="kontakt.html">Kontakt</a></li>
          <li class="list-inline-item"><a href="mapasajta.html">Mapa sajta</a></li>
        </ul>
        <p>
          <i class="fa fa-copyright" aria-hidden="true"></i>
          2021 Viking Gym, Miloša Obrenovića 135, Obrenovac, <a href="mailto:vikinggym@gmail.com">vikinggym@gmail.com,</a>
          <a href="tel:+61-6565-089">061-6565-089</a>
        </p>
      </div>
    </div>
  </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>