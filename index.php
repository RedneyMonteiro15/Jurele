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
    <title>Hotel Jurele</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/FO1.jpg" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <div>
                <h1><span class="text-warning" style="font-weight: 700;">Bora viajar </span>e
                    ser feliz</h1>
                <p class="lead my-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, error sequi. Inventore aperiam earum deserunt, porro voluptatem sed voluptas quae quam provident tempore eveniet doloribus? Ea ex et neque suscipit!
                </p>
                <button class="btn btn-lg">Bora!</button>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/FO2.jpg" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <div>
                <h1><span class="text-warning">Bora viajar </span>e
                    ser feliz</h1>
                <p class="lead my-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, error sequi. Inventore aperiam earum deserunt, porro voluptatem sed voluptas quae quam provident tempore eveniet doloribus? Ea ex et neque suscipit!
                </p>
                <button class="btn btn-lg" data-bs-toggle="modal" data-bs-target="enroll">Bora!</button>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/FO3.jpg" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <div>
                <h1><span class="text-warning">Bora viajar </span>e
                    ser feliz</h1>
                <p class="lead my-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, error sequi. Inventore aperiam earum deserunt, porro voluptatem sed voluptas quae quam provident tempore eveniet doloribus? Ea ex et neque suscipit!
                </p>
                <button class="btn btn-lg">Bora!</button>
            </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<section class="text-light p-5 cor-fundo">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb md-0">Reserva já?</h3>
            <div class="input-group">
                <form action="" method="post" class="reserva">
                    <label for="dataInicio">Data Check-in:<input type="date" name="" id="dataInicio" placeholder="Data Inicio"></label>
                    <label for="dataFim">Data Check-out:<input type="date" name="" id="dataFim"></label>
                    <label for="N_adultos">Nº Adultos<input type="number" name="" id="N_adultos" min=1 value="1"></label>
                    <label for="N_criancas">Nº Crianças<input type="number" name="" id="N_criancas" min=0 value="0"></label>
                    <input type="submit" class="btn-warning" value="Pesquisar">
                </form>
            </div>
        </div>
    </div>
</section>

<section id="learn" class="p-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="imagem/sobre.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md p-5">
                <h2>Sobre Nós?</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam deleniti nihil iusto eum consequatur illo atque quos hic ab, ut nobis totam quasi quibusdam. Aperiam sapiente itaque quibusdam at iste?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dicta numquam, cupiditate vero consequuntur nemo eligendi facilis nulla dolore ipsam ex ullam quos voluptatem perspiciatis, odit qui, nam cumque </p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam deleniti nihil iusto eum consequatur illo atque quos hic ab, ut nobis totam quasi quibusdam. Aperiam sapiente itaque quibusdam at iste?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dicta numquam, cupiditate vero consequuntur nemo eligendi facilis nulla dolore ipsam ex ullam quos voluptatem perspiciatis, odit qui, nam cumque </p>
                <a href="#" class="btn mt-3 cor-fundo text-light">Read More</a>
            </div>
        </div>
    </div>
</section>
<section id="learn" class="p-5 bg-dark text-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
                <h2>Learn React </h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam deleniti nihil iusto eum consequatur illo atque quos hic ab, ut nobis totam quasi quibusdam. Aperiam sapiente itaque quibusdam at iste?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dicta numquam, cupiditate vero consequuntur nemo eligendi facilis nulla dolore ipsam ex ullam quos voluptatem perspiciatis, odit qui, nam cumque </p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i>Read More
                </a>
            </div>
            <div class="col-md">
                <img src="img/fundo-400.png" alt="" class="img-fluid">
            </div>
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