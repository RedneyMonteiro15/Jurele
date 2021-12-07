<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="imagem/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title>Serviços</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark py-3 cor-fundo">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="imagem/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto header">
              <a class="nav-link" href="index.php">Home</a>
              <a class="nav-link" href="servicos.php">Serviços</a>
              <a class="nav-link" href="quartos.php">Quartos</a>
              <a class="nav-link" href="contatos.php">Contatos</a>
            </div>
          </div>
        </div>
    </nav>
</header>
<section class="p-5">
    <div class="container">
        <div class="row" style="width: 1400px;">
          <?php
          for($c = 0; $c < 8; $c++)
          {
            echo '  <div style="width: 18rem;">
                <img src="imagem/quarto1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                  <a href="#" class="btn btn-primary" style="width: 100px;">Reserva</a>
                </div>
            </div>';
          }
          ?>
        </div>
    </div>
</section>
<footer class="p-5 text-white text-center position-relative cor-fundo">
      <div class="container">
          <p class="lead">Copyright &copy; 2021 Hotel Jurele</p>
          <a href="#" class="buttom-0 end-0 p-5"><i class="fas fa-arrow-alt-circle-up text-dark" style="font-size: 40pt; float: right; "></i></a>
      </div>
  </footer>
  
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>