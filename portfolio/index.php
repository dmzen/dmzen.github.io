<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Freelancer - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>



<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">DimasEN</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Project</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead  text-white text-center" style="background-color: #fb8500;">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/multimedia/pp1.png" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Hello, im Dimas</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">2D Artist - Unemployed - Illustrator</p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Project</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><h3 class=" text-uppercase mb-0">Modul 1</h3></div>
                        </div>
                        <center><img class="img-fluid" src="assets/ps.svg" style="max-height: 250px; max-width:250px;"  alt="..." /></center>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><h3 class=" text-uppercase mb-0">Modul 2</h3></div>
                        </div>
                        <center><img class="img-fluid" src="assets/macromedia.png" style="max-height: 250px; max-width:250px;"  alt="..." /></center>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><h3 class=" text-uppercase mb-0">Modul 3</h3></div>
                        </div>
                        <center><img class="img-fluid" src="assets/macromedia.png" style="max-height: 250px; max-width:250px;"  alt="..." /></center>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><h3 class=" text-uppercase mb-0">Modul 4</h3></div>
                        </div>
                        <center><img class="img-fluid" src="assets/macromedia.png" style="max-height: 250px; max-width:250px;"  alt="..." /></center>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><h3 class=" text-uppercase mb-0">Modul 5</h3></div>
                        </div>
                        <center><img class="img-fluid" src="assets/vegas.png" style="max-height: 250px; max-width:250px;"  alt="..." /></center>
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><h3 class=" text-uppercase mb-0">Modul 6</h3></div>
                        </div>
                        <center><img class="img-fluid" src="assets/vegas.png" style="max-height: 250px; max-width:250px;"  alt="..." /></center>
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal7">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><h3 class=" text-uppercase mb-0">Modul 7</h3></div>
                        </div>
                        <center><img class="img-fluid" src="assets/ae.png" style="max-height: 250px; max-width:250px;"  alt="..." /></center>
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal8">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><h3 class=" text-uppercase mb-0">Modul 8</h3></div>
                        </div>
                        <center><img class="img-fluid" src="assets/blender.svg" style="height: 250px; max-width:250px;"  alt="..." /></center>
                    </div>
                </div>
                <!-- Portfolio Item 5-->
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal9">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><h3 class=" text-uppercase mb-0">Modul 9</h3></div>
                        </div>
                        <center><img class="img-fluid" src="assets/blender.svg" style="height: 250px; max-width:250px;"  alt="..." /></center>
                    </div>
                </div>
                <!-- Portfolio Item 6-->

            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section text-white mb-0" id="about" style="background-color: #fb8500;">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">Saya seorang Dimas Efri Nugroho yang berstatus mahasiswa di Universitas Sains dan Teknologi Jayapura sekaligus Artist 2D indie.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">Semoga dengan portfolio ini saya mampu mendapatkan pekerjaan dan semoga juga dapat memenuhi tugas dalam mata kuliah Multimedia yang sedang saya kontrak.</p>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->

            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form action="email.php" method="POST">
                        <div class="form-floating mb-3">
                            <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Kamu" />
                            <label for="name" class="form-label">Full Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input name="phone" type="number" class="form-control" id="phone" placeholder="Nomer yang bisa dihubungi" />
                            <label for="phone" class="form-label">Nomer Telephone :</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email kamu untuk kami balas" />
                            <label for="email" class="form-label">Email :</label>
                        </div>

                        <div class="form-floating mb-3">

                            <textarea name="pesan" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height:10rem;"></textarea>
                            <label for="email" class="form-label">Message :</label>

                        </div>

                        <hr class="my-4" />

                        <button class="btn btn-primary btn-xl" type="submit">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Address</h4>
                    <p class="lead mb-0">
                        Jayapura
                        <br />
                        Jalan Baru Abepura
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/edy.togodlay.1"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/dmz.en/"><i class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://wa.me/6282248450039"><i class="fab fa-fw fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://dribbble.com/Dmzen"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Multimedia</h4>
                    <p class="lead mb-0">
                    Multimedia adalah komputer untuk menyajikan dan menggabungkan teks, suara, gambar, animasi, audio, dan video dengan alat bantu (tool) dan tautan (link) sehingga pengguna dapat melakukan navigasi, berinteraksi, berkarya, dan berkomunikasi.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>&copy; Dimasen 2022</small></div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Modul 1</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <h3 class=" text-secondary text-uppercase mb-0">Latihan</h3>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid mod rounded mb-5" src="assets/multimedia/LatihanModul1.png" alt="..." />
                                <h3 class=" text-secondary text-uppercase mb-0">Tugas Studi Kasus</h3>
                                <img class="mod img-fluid rounded mb-5" src="assets/multimedia/Tugas2_20411020/sketsa.png" alt="..." />
                                <img class="mod img-fluid rounded mb-5" src="assets/multimedia/Tugas2_20411020/baju.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Link download <a href="https://drive.google.com/drive/folders/17TmZkGAgK4uvlgLRbJUaulZzC8x9rSHK?usp=share_link">File</a>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Modul 2</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <h3 class=" text-secondary text-uppercase mb-0">Latihan</h3>
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/latihan2/modul2-1.gif" alt="..." />
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/latihan2/modul2-2.gif" alt="..." />
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/latihan2/modul2-3.gif" alt="..." />
                                <h3 class=" text-secondary text-uppercase mb-0">Tugas Studi Kasus</h3>
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/latihan2/Tugas2.gif" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Link download <a href="https://drive.google.com/drive/folders/1edJux_eG21cAZTaIhyvbTsSoWxmIEpvb?usp=share_link">File</a>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Modul 3</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <h3 class=" text-secondary text-uppercase mb-0">Latihan</h3>
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul3/modul 2/modul3-1.gif " alt="..." />
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul3/modul 2/modul3-2.gif " alt="..." />
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul3/modul 2/modul3-4.gif " alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Link download <a href="https://drive.google.com/drive/folders/1S9DKgCQi9r2aZ6Moq7IOVduv6xnecyOQ?usp=share_link">File</a>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Modul 4</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                            
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Karena pada Modul 4 ini semua animasi memiliki event sehingga tidak dapat ditampilkan di web, jadi saya hanya bisa memberikan link file nya saja.
                                </p>
                                <p class="mb-4">Link download <a href="https://drive.google.com/drive/folders/1f-e4J_kHpDLdvET1SpuGDTwWF_rY-nbq?usp=share_link">File</a>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Modul 5</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <h3 class=" text-secondary text-uppercase mb-0">Latihan</h3>
                                <div class="embed-responsive embed-responsive-16by9 mb-5">
                                    <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1hKWzZFTu9ok_tv-YIAA4DcSr9K4jrN9n/preview" width="640" height="480" allow="autoplay" style="border-radius:20px;" width="640" height="480" allow="autoplay" allowfullscreen></iframe>
                                </div>
                                <h3 class=" text-secondary text-uppercase mb-0">Tugas Studi Kasus</h3>
                                <div class="embed-responsive embed-responsive-16by9 mb-5">
                                    <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1u7mGmPZ8erRP8xun9bPiB2yCq5Hgt7q2/preview" width="640" height="480" allow="autoplay" style="border-radius:20px;" width="640" height="480" allow="autoplay" allowfullscreen></iframe>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Link download <a href="https://drive.google.com/drive/folders/1f-e4J_kHpDLdvET1SpuGDTwWF_rY-nbq?usp=share_link">File</a>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Modul 6</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <h3 class=" text-secondary text-uppercase mb-0">Latihan</h3>
                                <div class="embed-responsive embed-responsive-16by9 mb-5">
                                    <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1SXFuih5GPmGTmtd-rj5I-En5IqlvkmZ-/preview" width="640" height="480" allow="autoplay" style="border-radius:20px;" width="640" height="480" allow="autoplay" allowfullscreen></iframe>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Link download <a href="https://drive.google.com/drive/folders/1jIf7LD5fUDalLYm5AraBZSNq0XUjWJVQ?usp=share_link">File</a>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Modul 7</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <h3 class=" text-secondary text-uppercase mb-0">Latihan</h3>
                                <div class="embed-responsive embed-responsive-16by9 mb-5">
                                    <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/10A43QZAR8MKeFRN_vOenO1kvu4Hpg357/preview" width="640" height="480" allow="autoplay" allowfullscreen></iframe>
                                </div>
                                <h3 class=" text-secondary text-uppercase mb-0">Tugas Studi Kasus</h3>
                                <div class="embed-responsive embed-responsive-16by9 mb-5">
                                    <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1fr_qUgiI_PbMW7ve_cAUuOzav5-IFtOe/preview" width="640" height="480" allow="autoplay" allowfullscreen></iframe>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Link download <a href="https://drive.google.com/drive/folders/1f-08R5c3pufaKI8BBq1PtvdBRcu2zv_9?usp=share_link">File</a>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Modul 8</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <h3 class=" text-secondary text-uppercase mb-0">Latihan</h3>
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul8/Latihan/Latihan8.png" alt="..." />
                                <h3 class=" text-secondary text-uppercase mb-0">Tugas Studi Kasus</h3>
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul8/studi kasus/povAtas.png" alt="..." />
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul8/studi kasus/povPojok1.png" alt="..." />
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul8/studi kasus/povPojok2.png" alt="..." />
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul8/studi kasus/depan.png" alt="..." />
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul8/studi kasus/belakang.png" alt="..." />
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul8/studi kasus/samping1.png" alt="..." />
                                <img class="img-fluid rounded mb-5" src="assets/multimedia/modul8/studi kasus/samping2.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Link download <a href="https://drive.google.com/drive/folders/1IWSGqaEIWG8eMIBcucE-ATLo5So7uixg?usp=share_link">File</a>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Modul 9</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <h3 class=" text-secondary text-uppercase mb-0">Latihan</h3>
                                <div class="embed-responsive embed-responsive-16by9 mb-5">
                                    <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/14ZxyANf0ZImKFnUn34FuJ7_nJyp7pgIy/preview" style="border-radius:20px;" width="640" height="480" allow="autoplay" allowfullscreen></iframe>
                                </div>
                                <h3 class=" text-secondary text-uppercase mb-0">Tugas Studi Kasus</h3>
                                <div class="embed-responsive embed-responsive-16by9 mb-5">
                                    <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1mPEejOoENhkRzjRM8xsWFZ9nvAdE422K/preview" width="640" height="480" allow="autoplay" style="border-radius:20px;" width="640" height="480" allow="autoplay" allowfullscreen></iframe>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Link download <a href="https://drive.google.com/drive/folders/1qLk7yh8gKnxigDIpGHfM6TPJtmTR4D5q?usp=share_link">File</a>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>