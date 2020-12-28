<?php
    include "connection.php";
    session_start();
    if (empty($_SESSION['email'])) {
        header("location:login.php?message=expired");
    }

    $email = $_SESSION['email'];
    $query = mysqli_query($con, "SELECT * FROM user WHERE email_address = '$email'") or die(mysqli_error($con));
    $data = mysqli_fetch_array($query);
?>

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
                    <a class="navbar-brand" href="view_user.php">
                        <i class="fas fa-robot"></i> IoT
                    </a>
                    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span id="dropdown-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php ">Logout</a>
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
                            <img src="./assets/GIF/Personal Settings.gif" class="img-fluid mb-md-4 mb-0" alt="Personal Settings">
                        </div>
                        <div class="col-lg content-home mb-lg-4">
                            <h1><b>Welcome</b> <?php echo $data['username'];?>!</h1>
                            <h2>Enjoy Working!</h2>
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

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <!-- JS -->
        <script src="js/navbar.js"></script>
    </body>
</html>