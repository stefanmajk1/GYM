<header id="header">
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
            <li class="navitem">
            <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>
        </div>
      </div>
    </nav>

        
</header>