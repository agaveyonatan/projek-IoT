<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="An application for Internet of Thing Practicum">
        <meta name="keywords" content="internet, thing, internet of thing">
        <meta name="author" content="">

        <title>Internet of Thing</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="./assets/favicon/shortcut-icon.png">
        <link rel="icon" type="image/png" href="./assets/favicon/icon.png">
        <link rel="apple-touch-icon" href="./assets/favicon/apple-touch-icon.png">

        <!-- Font Style -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="./styles/main.css ">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <i class="fas fa-robot"></i> IoT
                    </a>
                    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span id="dropdown-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#project">Project</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faq">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <section id="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md content-home">
                            <img src="./assets/GIF/Robot.gif" class="img-fluid mb-md-4 mb-0" alt="Robot">
                        </div>
                        <div class="col-md content-home mb-lg-4">
                            <h1><b>Internet</b> of Thing</h1>
                            <h2 class="mb-lg-5 mb-4">Lorem ipsum dolor sit amet</h2>
                            <h5>Lorem ipsum dolor sit amet consectetur!</h5>
                            <a href="login.php" class="d-lg-inline"><button type="button" class="btn btn-lg mb-4 mb-md-2" id="mainButton">LOGIN <i class="fas fa-sign-in-alt"></i></button></a>
                            <a href="register.php" class="d-lg-inline"><button type="button" class="btn btn-lg mb-4 mb-md-2" id="buttonRegister">REGISTER <i class="fas fa-pen"></i></button></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col text-center mt-4">
                            <h2><b>About</b> Us</h2>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <h4><b>Lorem, ipsum!</b></h4>
                            <p> 
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quasi, veniam repudiandae fuga recusandae expedita!
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="py-1">
            <div class="container">
                <div class="footer-copyright text-center text-white py-3">
                    © 2021 Developed With <i class="fas fa-heart"></i> By Lorem, ipsum</a>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <script src="js/navbar.js"></script>
    </body>
</html>