<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Testando</title>

  <link href="http://127.0.0.1:8000/style.css" rel="stylesheet">
 
  <meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="home.blade.php">
      <img src="Img/perfil.png" alt="" width="80" height="54" class="d-inline-block align-text-top">
      
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.blade.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="album.blade.php">Album</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.blade.php">Sobre</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Itens
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Formulario</a></li>
            <li><a class="dropdown-item" href="#">Contato</a></li>
          </ul>
        </li>       
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  width="100%" height="100%"  src="Img/1slide1.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-start">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img  width="100%" height="100%"  src="Img/1slide1.jpg" class="d-block w-100" alt="...">

        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img  width="100%" height="100%"  src="Img/1slide1.jpg" class="d-block w-100" alt="...">

        <div class="container">
          <div class="carousel-caption text-end">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" src="Img/1heading.jpg" class="d-block w-100" alt="...">
        <h2>Ler</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse tenetur corporis, rerum sint necessitatibus distinctio et numquam dolores ad labore voluptatibus maiores consectetur natus est, voluptates nulla repudiandae. Praesentium, asperiores!</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
         <img class="bd-placeholder-img rounded-circle" width="140" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" src="Img/3heading.jpg" class="d-block w-100" alt="...">

        <h2>Viver</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam nam aliquid quia tempore itaque quae harum praesentium nisi cupiditate corrupti facilis sunt non obcaecati accusamus quod et, velit id. Vel.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
         <img class="bd-placeholder-img rounded-circle" width="140" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" src="Img/2heading.jpg" class="d-block w-100" alt="...">

        <h2>Conhecer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur nisi, quam veritatis sit odio debitis deleniti reprehenderit cum praesentium, dolores provident unde quia, placeat corrupti ipsum eos autem dicta accusamus!.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Lorem ipsum dolor sit amet <span class="text-muted">consectetur adipisicing elit.</span></h2>
        <p class="lead">quam veritatis sit odio debitis deleniti reprehenderit cum praesentium, dolores provident unde quia, placeat corrupti ipsum eos autem dicta accusamus!</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="Img/1bibli.jpg" alt="">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem<span class="text-muted">accusantium doloremque laudantium.</span></h2>
        <p class="lead">totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="Img/bibli2.png" alt="">
       

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="Img/3bibli.jpg" alt="">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <a class="btn btn-primary float-end" href="home.blade.php" role="button">Volte ao Inicio</a>
    <p>&copy; 2021 Company - Unipam. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
  </footer>
</main>
</body>
</html>