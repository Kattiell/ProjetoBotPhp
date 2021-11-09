<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Album - Biblioteca</title>


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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

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
              <a class="nav-link " aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/Album">Album</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Sobre">Sobre</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Itens
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class=" dropdown-item" href="/contato">Contato</a></li>
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



    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img width="100%" height="100%" src="Img/1slide1.jpg" class="d-block w-100" alt="...">
          <div class="container">
            <div style="color: green;" class="carousel-caption text-start">
              <h1>Sejam Bem - Vindos!</h1>

              <?php
              $Object = new DateTime();
              $DateAndTime = $Object->format("h:i:s a");          
              if (date('H') >= 0 && date('H') <= 12) {
                echo "Bom Dia. Agora são: $DateAndTime.";
              } elseif (date('H') >= 13 && date('H') <= 18) {
                echo "Boa Tarde. Agora são: $DateAndTime." ;
              } else {
                echo "Boa Noite. Agora são: $DateAndTime.";
              }
              ?>

            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img width="100%" height="100%" src="Img/1slide1.jpg" class="d-block w-100" alt="...">

          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img width="100%" height="100%" src="Img/1slide1.jpg" class="d-block w-100" alt="...">

          <div class="container">
            <div class="carousel-caption text-end">
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Sobre</h4>
              <p class="text-muted">Adicione alguma informação sobre o álbum abaixo (autor ou qualquer outro background). Faça essas informações terem algumas frases, para a galera ter algumas informações que besliscar. Além disso, use link nelas para as redes sociais ou informações de contato.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contato</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Me siga no Twitter</a></li>
                <li><a href="#" class="text-white">Curta no Facebook</a></li>
                <li><a href="#" class="text-white">Me envie um e-mail</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album de Livros da Biblioteca</h1>
          <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nemo! Explicabo sit beatae voluptas itaque harum consequuntur molestias eos optio sint atque aperiam asperiores, rem quia soluta ducimus saepe aut.</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Img/testeimagem.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex minima facilis repudiandae aperiam eligendi. Cupiditate nulla nesciunt possimus suscipit quae, ullam quidem dolorum quis laborum laudantium, quia saepe vel nam.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Img/testeimagem.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex minima facilis repudiandae aperiam eligendi. Cupiditate nulla nesciunt possimus suscipit quae, ullam quidem dolorum quis laborum laudantium, quia saepe vel nam. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Img/testeimagem.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex minima facilis repudiandae aperiam eligendi. Cupiditate nulla nesciunt possimus suscipit quae, ullam quidem dolorum quis laborum laudantium, quia saepe vel nam. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Img/testeimagem.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex minima facilis repudiandae aperiam eligendi. Cupiditate nulla nesciunt possimus suscipit quae, ullam quidem dolorum quis laborum laudantium, quia saepe vel nam. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Img/testeimagem.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex minima facilis repudiandae aperiam eligendi. Cupiditate nulla nesciunt possimus suscipit quae, ullam quidem dolorum quis laborum laudantium, quia saepe vel nam. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Img/testeimagem.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex minima facilis repudiandae aperiam eligendi. Cupiditate nulla nesciunt possimus suscipit quae, ullam quidem dolorum quis laborum laudantium, quia saepe vel nam. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Img/testeimagem.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex minima facilis repudiandae aperiam eligendi. Cupiditate nulla nesciunt possimus suscipit quae, ullam quidem dolorum quis laborum laudantium, quia saepe vel nam. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Img/testeimagem.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex minima facilis repudiandae aperiam eligendi. Cupiditate nulla nesciunt possimus suscipit quae, ullam quidem dolorum quis laborum laudantium, quia saepe vel nam. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Img/testeimagem.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex minima facilis repudiandae aperiam eligendi. Cupiditate nulla nesciunt possimus suscipit quae, ullam quidem dolorum quis laborum laudantium, quia saepe vel nam. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>










    </div><!-- /.container -->
    <!-- FOOTER -->
    <footer id="footer">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h4>Lorem Ipsum</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam pariatur voluptatum, quasi impedit consequuntur optio, accusantium eius odit ex, natus reprehenderit quaerat ullam magni temporibus sint eaque quos harum numquam.</p>
            </div>
            <div class="col-lg-6">
              <form action="" method="post"> <input type="email" name="email"><input type="submit" value="Cadastrar"> </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Lorem Ipsum Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Album</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Formulario</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Contato</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Lorem Ipsum Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Desenvolvimento</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Gestão de Produtos</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Design Gráfico</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Lorem Ipsum contact</h4>
              <p> Name for ipsum street <br> City, state <br> Name <br><br> <strong>Phone:</strong> (34) +55 0 0000.0000<br> <strong>Email:</strong> info@example.com<br> </p>
            </div>
            <div class="col-lg-3 col-md-6 footer-info">
              <h3>Lorem Ipsum</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum asperiores error accusantium? Temporibus, magni necessitatibus. Unde, at voluptate. Sint, vero atque. Consequuntur libero laboriosam nisi, dolor iste itaque minus nulla?</p>
              <div class="social-links mt-3"> <a href="#" class="Whats"><i class="bi-whatsapp"></i></a><a href="#" class="twitter"><i class="bi-github"></i></a> <a href="#" class="facebook"><i class="bi-facebook"></i></a> <a href="#" class="instagram"><i class="bi-instagram"></i></a> <a href="#" class="linkedin"><i class="bi-linkedin"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright"> &copy; <?php echo date('Y') ?> | {{date('M')}} | Company - Unipam | <a href="#"> Privacidade</a> &middot; <a href="#">Termos</a></p>
    </footer>
  </main>
</body>

</html>