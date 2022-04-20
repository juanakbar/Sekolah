<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="/img/portal/logo-2.png" type="image/x-icon">
    {{-- AOS ANIMATION --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- OWL CAROUSEL --}}
    <link rel="stylesheet" href="/css/owl/owl.carousel.min.css">
    {{--
    <link rel="stylesheet" href="https://demo.themesberg.com/pixel-pro/css/pixel.css" /> --}}
    <script src="https://use.typekit.net/bkt6ydm.js"></script>
    <script>
        try{Typekit.load({ async: true });}catch(e){}
    </script>

    {{-- Pattern --}}
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
    <title>MAS AL-BIDAYAH</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top">
        <div class="container">
            <div class="navbar-brand">
                <img src="/img/portal/logo.png" alt="" width="40" height="40" class="d-inline-block align-center"
                    style="font-weight: 600">
                MAS AL-BIDAYAH
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/beranda"><i class="fa fa-home me-2"></i> Beranda
                        </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i> Profile
                        </a>
                        <ul class="dropdown-menu dropdown-menu-start fade-down">
                            <li><a class="dropdown-item" href="/profile/sejarah"><i
                                        class="bi bi-file-earmark-richtext me-2"></i>
                                    Sejarah Singkat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-address-book me-2"></i>
                                    Profile Madrasah</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user-group fa-xs me-2"></i>
                                    Personil
                                    Madrasah</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-code-merge me-2"></i> Struktur
                                    Organisasi</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-hotel me-2"></i> Sarana
                                    Prasana</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-handshake fa-sm me-2"></i> Kerja
                                    Sama</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown"><i class="fa fa-building me-2"></i>
                            Akademik </a>
                        <ul class="dropdown-menu dropdown-menu-start fade-down">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i> Program
                                    Studi</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-pen me-2"></i> Konsep
                                    Pendidikan</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-book me-2"></i> Kurikulum</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-list-check me-2"></i> Peraturan
                                    Akademik</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-calendar me-2"></i> Kalaender
                                    Akademik</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown"><i class="fa fa-users fa-sm me-2"></i>
                            Kesiswaan </a>
                        <ul class="dropdown-menu dropdown-menu-start fade-down">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-people-group fa-sm me-2"></i>
                                    Pengelolaan
                                    Peserta Didik</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-palette me-2"></i>
                                    Esktrakurikulrt</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-building-columns me-2"></i> Web
                                    Osis</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-code-branch me-2"></i> Menjadi
                                    Alumnus</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown"><i
                                class="fa-solid fa-boxes-stacked me-2"></i> Aplikasi </a>
                        <ul class="dropdown-menu dropdown-menu-start fade-down">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-laptop-code me-2"></i>
                                    E-Learning</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-swatchbook me-2"></i>
                                    Perpustakaan</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-book-atlas me-2"></i> Rapot
                                    Digital</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user-check me-2"></i> CBT
                                    Seleksi Masuk</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-address-card me-2"></i> Web
                                    PPDB</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link " href="#"><i class="fa-solid fa-images me-2"></i> Galery
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}
    <footer id="sticky-footer" class="footer-32892 pb-0 flex-shrink-0 py-4 bg-dark">
        <div class="site-section">
            <div class="container">
                <div class="row">

                    <div class="col-md pr-md-5 mb-4 mb-md-0">
                        <h3>About Us</h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam itaque unde
                            facere
                            repellendus, odio et iste voluptatum aspernatur ratione mollitia tempora eligendi maxime
                            est, blanditiis
                            accusamus. Incidunt, aut, quis!</p>
                        <ul class="list-unstyled quick-info mb-4">
                            <li><i class="fa-solid fa-phone me-2"></i><a href="#" class="d-flex align-items-center"> +1
                                    291 3912
                                    329</a></li>
                            <li><i class="fa-solid fa-envelope me-2"></i><a href="#" class="d-flex align-items-center">
                                    info@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md mb-4 mb-md-0">
                        <h3>Latest Tweet</h3>
                        <ul class="list-unstyled tweets">
                            <li class="d-flex">
                                <div class="mr-4"><span class="icon icon-twitter"></span></div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam
                                    porro excepturi.
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="mr-4"><span class="icon icon-twitter"></span></div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam
                                    porro excepturi.
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="mr-4"><span class="icon icon-twitter"></span></div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam
                                    porro excepturi.
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-0">
                        <h3>Instagram</h3>
                        <div class="row gallery">
                            <div class="col-6">
                                <a href="#"><img src="/img/portal/no-image.png" alt="Image" class="img-fluid"></a>
                                <a href="#"><img src="/img/portal/no-image.png" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-6">
                                <a href="#"><img src="/img/portal/no-image.png" alt="Image" class="img-fluid"></a>
                                <a href="#"><img src="/img/portal/no-image.png" alt="Image" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    {{-- Script Aos --}}
    <script>
        AOS.init({
        duration : 1200,
        easing: 'ease-in'
      });
    </script>
    {{-- Script Owl --}}
    {{-- <script src="js/jquery.min.js"></script> --}}
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</body>

</html>