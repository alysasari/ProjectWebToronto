<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web University of Toronto</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar.bg-body-blue {
            background-color: rgba(255, 255, 255, 0.3); /* Latar belakang putih dengan transparansi */
            backdrop-filter: blur(10px); /* Efek buram di belakang navbar */
        }
        .navbar .navbar-brand,
        .navbar .nav-link {
            color: black; /* Warna teks putih */
        }
        .navbar .nav-link:hover {
            color: #ddd; /* Warna teks saat di-hover */
        }

        .bgimage {
            background-image: url('image/2f4020ef-9b66-4ac7-9c16-5d91187b752e.webp');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 600px; /* Anda bisa mengatur tinggi sesuai kebutuhan */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .bgimage h2 {
            font-size: 100px;
            font-family: 'Times New Roman', serif;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.5);
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
            padding: 20px;
        }

        .content-1 {
            display: flex;
            padding: 5px;
        }
        .content img {
            width: 40%;
            border-radius: 5px;
        }

        .content .text {
            max-width: 50%;
            padding-left: 20px;
            font-family: 'Times New Roman', serif;
        }
        .content-1 .text {
            font-family: 'Times New Roman', serif;
            padding: 15px;
            margin:10px;
        }

        .content .text h4 {
            font-size: 1.8rem;
            color: #1e3765;
        }
        .content-1 .text h4 {
            font-size: 1.8rem;
            color: #1e3765;
        }

        .content .text p {
            font-size: 1.1rem;
        }
        .content-1 .text p {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar bg-body-blue navbar-expand-lg fixed-top">
            <div class="container-fluid" style="margin: 13px">
                <a class="navbar-brand" href="#" style="font-weight: bold; font-family: 'Times New Roman', serif;">
                    <img src="image/Utoronto_coa.svg.png" width="50px" alt="logo">UNIVERSITY OF TORONTO
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" style="font-family: 'Times New Roman', serif; font-size: 120%;" id="offcanvasNavbarLabel">
                            <img src="image/Utoronto_coa.svg.png" width="60px" alt="logo">UNIVERSITY OF TORONTO
                        </h5>
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
                                <a class="nav-link" href="#">Research</a>
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
    </div>

    <br><br>
    <div class="bgimage">
        <h2>Celebrating <br>Class Of 2024</h2>
    </div><br><br>
    <div class="content-1">
        <div class="text">
            <h4>Our Profile</h4>
            <p>The University of Toronto or University of Toronto (U of T) is one of the leading universities in the world which was founded in 1827,As an educational institution nearly two centuries old, U of T has made significant contributions to the world of education, research and innovation.</p>
        </div>
    </div>
    <div class="content">
        <img src="image/cover-utm-hazel-mccallion-bldg.jpeg" alt="Mississauga Campus">
        <div class="text">
            <h4>Mississauga Campus</h4>
            <p>The University of Toronto Mississauga (UTM) is one of the University of Toronto's three campuses. Located in the City of Mississauga, UTM offers a dynamic and engaging environment for learning and research.</p>
        </div>
    </div>
    <div class="content">
        <img src="image/stgeorge-campus-cover_0.webp" alt="St. George Campus">
        <div class="text">
            <h4>St. George Campus</h4>
            <p>The St. George campus is the main campus of the University of Toronto. Located in downtown Toronto, it is home to a diverse and vibrant community of students, faculty, and staff.</p>
        </div>
    </div>
    <div class="content">
        <img src="image/cover-campus-utsc.jpeg" alt="Scarborough Campus">
        <div class="text">
            <h4>Scarborough Campus</h4>
            <p>The University of Toronto Scarborough (UTSC) is located in the eastern part of Toronto. It is known for its unique programs, strong community connections, and beautiful natural surroundings.</p>
        </div>
    </div>
    <div class="dddd" style="background-color: rgba(9, 42, 117, 0.815); padding: 20px;">
        <h5 style="color: white; margin-left: 530px; font-family: 'Times New Roman', serif;">About Us <img src="image/c.png" alt="c" width="25px"> 2024</h5>
        <br>
        <div style="margin-top: 10px;">
            <img src="image/youtube.png" alt="youtube" width="30px" style="margin-left: 450px; margin-right: 20px;">
            <img src="image/fb.png" alt="fb" width="30px" style="margin-right: 20px;">
            <img src="image/linkedin.png" alt="linkedin" width="30px" style="margin-right: 20px;">
            <img src="image/tiktok.png" alt="tiktok" width="30px" style="margin-right: 20px;">
            <img src="image/ig.png" alt="instagram" width="30px" style="margin-right: 20px;">
            <img src="image/x.png" alt="x" width="30px;">
        </div>
        <br><br>
        <h6 style="color: white; margin-left: 460px; font-family: 'Times New Roman', serif;">UNIVERSITY OF TORONTO - SINCE 1827</h6>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3CmXK5Utvh1zj+8iT7d7KKF7/6f" crossorigin="anonymous"></script>
</body>
</html>
