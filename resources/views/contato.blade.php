<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Simulator - Biblioteca</title>


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
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Album">Album</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Sobre">Sobre</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Itens
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item nav-link active" href="/formulario">Formulario</a></li>
                                <li><a class="dropdown-item" href="/contato">Contato</a></li>
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
                                echo "Boa Tarde. Agora são: $DateAndTime.";
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

        <div class="container">
            <form class="was">
                <div class="mb-2">
                    <label for="validationTextarea">Envie-nos uma mensagem, agradecemos o seu feedback!!</label>
                    <textarea class="form-control is" id="validationTextarea" placeholder="Digite o seu texto" required></textarea>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationTextarea">Nome</label>
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col">
                        <label for="validationTextarea">Sobrenome</label>
                        <input type="text" class="form-control" placeholder="Sobrenome">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                    <br>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                    <label class="custom-control-label" for="customControlValidation1">Concorde com os termos</label>
                </div>
                <div class="form-group">
                    <select class="custom-select" required>
                        <option value="">Nos dê o seu feedback!</option>
                        <option value="1">Ruim</option>
                        <option value="2">Medio</option>
                        <option value="3">Bom</option>
                    </select>
                </div>
                <br>
                <label for="validationTextarea">Caso queira nos enviar um print do site ou algum documento de texto apotando onde podemos melhorar, fique avontade!!</label>
                <br>              
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile"></label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar Dados</button>
            </form>
        </div>

        <br>

        <footer id="footer">
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