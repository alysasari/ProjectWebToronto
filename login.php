<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Web</title>
    <link rel = "stylesheet" href= "style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body  style="background : url(image/ccc.jpg)">
  <div class="container">
                    <nav class="navbar bg-body-tertiary fixed-top">
               <div class="container-fluid" style="margin : 13px">
               <a class="navbar-brand" href="#" style="font-weight : bold; font-family : times new roman"><img src="image/Utoronto_coa.svg.png" width="50px" alt="logo">UNIVERSITY OF TORONTO</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                    <h5 class="offcanvas-title" style="font-family : times new roman; font-size : 120%" id="offcanvasNavbarLabel" ><img src="image/Utoronto_coa.svg.png" width="100px" alt="logo">UNIVERSITY OF TORONTO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                         <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="web.php">Homepage</a>
                         </li>
                         <li class="nav-item">
                         <a class="nav-link" href="login.php">Mystery</a>
                         </li>
                         <li class="nav-item">
                         <a class="nav-link" href="aboutuot.php">About UOT</a>
                         </li>
                         <li class="nav-item">
                         <a class="nav-link" href="#">Reseach</a>
                         </li>
                         <li class="nav-item">
                         <a class="nav-link" href="#">News</a>
                         </li>
                         <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Education
                         </a>
                         <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="#">Undergraduate</a></li>
                         <li><a class="dropdown-item" href="#">Master</a></li>
                         <li><a class="dropdown-item" href="#">Doctor</a></li>
                         <li>
                              <hr class="dropdown-divider">
                         </li>
                         <li><a class="dropdown-item" href="#">Organization</a></li>
                         </ul>
                         </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                         <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
               </div>
               </div>
               </nav>
              
               <?php 
              if(isset($_GET['pesan'])) {
               if($_GET['pesan'] == "gagal") {
                   echo "Login gagal! Email dan password salah!";
               }else if($_GET['pesan'] == "logout") {
                   echo "Anda telah berhasil logout";
               }else if($_GET['pesan'] == "belum_login") {
                   echo "Anda harus login untuk mengakses halaman";
               }
           }
               
               
               ?>
               <div class="container-form">
                     <form class="form1login" action="proseslogin.php" method="POST">
                        <h5 style="font-family : times new roman; margin-left: 65px;margin-bottom : 20px"><img src="image/icons8-login-64.png" alt="kuncilogo" width="40px"> Mystery Login </h5>
                        <div class="row mb-3">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" style="margin-left : 20px" autofocus placeholder="Fill the username">
                            <br>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" style="margin-left : 23px;width: 250px" autofocus placeholder="Fill the password">
                            <br>
                        </div>
                        
                       
                       
                        <button type="submit" class="btn btn-primary" name ="submit" style="margin-left : 100px;width:130px;border-radius:5px">Log in</button> <br> 
                       
                    </form>
                </div>
    
          <br>
  </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

