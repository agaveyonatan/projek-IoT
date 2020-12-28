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

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
                                <a class="nav-link" href="register.php ">Register</a>
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
                        <div class="col-lg content-home">
                            <img src="./assets/GIF/Robot.gif" class="img-fluid mb-md-4 mb-0" alt="Robot">
                        </div>
                        <div class="col-lg content-home mb-lg-4">
                            <h1><b>Login</b> Here!</h1>
                            <h4 class="mb-lg-5 mb-4">Don't have account? <a href="register.php" style="text-decoration: underline">Register!</a></h4>
                            <?php 
                                if (isset($_GET['message'])){	
                                    ?>
                                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                        <?php
                                            if ($_GET['message'] == "error") {
                                                echo "Wrong email address or password!";
                                            }
                                            else if ($_GET['message'] == "logout") {
                                                echo "You're logged out";
                                            }
                                            else if ($_GET['message'] == "expired") {
                                                echo "Your session has timed out, please login again";
                                            }
                                        ?>                                        
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php
                                }
                            ?>
                            <form action="user_login_check.php" method="GET">
                                <label for="inputEmail" class="form-label">Email address</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    <input type="email" class="form-control" id="inputEmail" name="email">
                                </div>
                                <span class="emailMessage"></span>

                                <label for="inputPassword" class="form-label">Password</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" id="inputPassword" name="password">
                                    <button class="btn btn-secondary passValidation" type="button"><i class="far fa-eye"></i></button>
                                </div>
                                <span class="passwordMessage"></span>

                                <button type="submit" class="btn btn-lg btn-submit mb-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="py-1">
            <div class="container">
                <div class="footer-copyright text-center text-white py-3">
                    © 2020 Developed With <i class="fas fa-heart"></i> By Lorem, ipsum</a>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="js/navbar.js"></script>
        <script src="js/emailValidation.js"></script>
        <script src="js/passwordValidation.js"></script>
    </body>
</html>