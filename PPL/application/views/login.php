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
        <link href="assets/css/styles.css" rel="stylesheet" />
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
        <section class="page-section clearfix">
            <div class="container">
                
                    
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <form   method="POST">        
                                
                                <table class="center">
                                  <tr>
                                      <td>Username</td>
                                      <td><input type="text"  name="username" placeholder="Username" autofocus></td>
                                  </tr>
                                <tr></tr>
                                <tr></tr>
                                <tr >
                                    <td>Password</td>
                                    <td><input type="password" class="form-control" name="password" placeholder="Password"></td>
                                </tr>
                                </table>
                                <label class="checkbox">
                                    <input type="checkbox" value="remember-me"> Remember me
                                    <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                                </label>
                                <button  type="submit" name="submit">Login</button>
                                <button  type="submit">Signup</button>
                            </div>
                          </form>
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
