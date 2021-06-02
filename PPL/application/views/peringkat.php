<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cafe Game Challenge</title>
        <link rel="icon" type="image/x-icon" href="assets/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                
                <span class="site-heading-lower">CAFE GAME CHALLENGE</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href='<?php echo base_url("control/index"); ?>'>Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href='<?php echo base_url("control/jadwal"); ?>'>Jadwal</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href='<?php echo base_url("control/peringkat"); ?>'>Peringkat</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href='<?php echo base_url("control/berita"); ?>'>Berita</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href='<?php echo base_url("control/login"); ?>'>Login</a></li>
                        <li class="nav-item px-lg-4"><input type="text" placeholder="Search.." name="search"> <button type="submit">Submit</button></ul>
                </div>
            </div>
        </nav>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                
                                <span class="section-heading-lower">Peringkat</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    1. Team 1
                                    <span class="ms-auto">poin</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    2. Team 2
                                    <span class="ms-auto">poin</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    3. Team 3
                                    <span class="ms-auto">poin</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    4. Team 4
                                    <span class="ms-auto">poin</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    5. Team 5
                                    <span class="ms-auto">poin</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    6. Team 6
                                    <span class="ms-auto">poin</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    7. Team 7
                                    <span class="ms-auto">poin</span>
                                </li>
                            </ul>
                         </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
