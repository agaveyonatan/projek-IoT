<!-- <?php
    $jarak = $_GET['jarak'];
?> -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="An application for Internet of Thing Practicum">
        <meta name="keywords" content="internet, thing, internet of thing">
        <meta name="author" content="">
        <meta http-equiv="refresh" content="0.5">

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
        <!-- <h1>Jarak : <?= $jarak ?> cm</h1> -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-content">
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
                                <a class="nav-link" href="view_user.php ">Back</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <section id="showData">
                <!-- <h1>Jarak : <?= $jarak ?> cm</h1> -->
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mt-4 mb-2">
                            <h3>Data Sensor</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3" id="records"></div>
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
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <!-- JS -->
        <script src="js/navbar.js"></script>
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="./js/getAJAX.js"></script>
    </body>
</html>