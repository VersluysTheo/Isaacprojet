<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Nyugga</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
      <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="index.php"><img src="public/image/coeur.png" alt="main" height="40px"></a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active mx-2">
            <button type="button" class="btn btn-dark"><a class="nav-link text-light" aria-current="page" href="index.php?action=card">Personnages</a></button>
            </li>
            <li class="nav-item active mx-2">
            <button type="button" class="btn btn-dark"><a class="nav-link text-light" aria-current="page" href="index.php?action=objet">Objets</a></button>
            </li>
            <li class="nav-item active mx-2">
            <button type="button" class="btn btn-dark"><a class="nav-link text-light" aria-current="page" href="index.php?action=randomizer">Randomizer</a></button>
            </li>
            <!-- <li class="nav-item active mt-2 mx-2 mr-2">
            <a href="index.php?action=login"><button type="button" class="btn btn-primary">Se connecter</button></a>
            </li>
            <li class="nav-item active mt-2 mr-2">
            <a href="index.php?action=logout"><button type="button" class="btn btn-danger">Se deconnecter</button></a>
            </li> -->
            <li class="nav-item active mt-2 mx-2">
            <a href="index.php?action=ajouter"><button type="button" class="btn btn-secondary">Ajouter un Objet</button></a>
            </li>
          </ul>

          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->

            <form action="index.php" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search" name="searchbar">
            </form>

            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://twitter.com/nyuggai" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://github.com/VersluysTheo" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->
  <div
  class="bg-image"
  style="
    background-image: url('https://images7.alphacoders.com/555/555641.png');
    height: auto;
  ">
    <?php echo $content ; ?>

</div>


  <!--Footer-->
  <footer class="bg-light text-lg-start">


    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">Nyugga</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->

  
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="js/randomizer.js"></script>
</body>
</html>