<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>FREPHY</title>
    <link rel="icon" href="{!! asset('img/title.png') !!}"/>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <img src="img/log_o.png" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#page-top">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Hubungi Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead img-fluid">
        <div class="container">
            <div class="masthead-heading text-uppercase">Selamat Datang Di FREPHY!</div>
            <div class="masthead-subheading">Buka Pintu Kesehatan Mental Anda, Bersama Sahabat Setia Frephy</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="/login" style="border-radius:20px;">Jadwalkan
                Konsultasi</a>
        </div>
    </header>

    <!-- Layanan -->
    <section class="page-section" id="layanan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Layanan</h2>
                <h3 class="section-subheading text-muted">Frephy memiliki 2 Jenis Konselor</h3>
            </div>
            <div class="row text-center justify-content-center">
                <!-- Layanan Konselor Sebaya -->
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-user-friends fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Konselor Sebaya</h4>
                    <p class="text-muted">Temani perjalanan Anda dengan "Sahabat Curhat" kami yang siap memberikan
                        solusi atas permasalahan tertentu.</p>
                </div>
                <!-- Layanan Konselor Profesional -->
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-user-md fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Konselor Profesional</h4>
                    <p class="text-muted">Dapatkan layanan kesehatan mental yang lebih mendalam dari para ahli di
                        bidangnya. Konselor profesional kami siap membantu Anda mengatasi berbagai tantangan hidup.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Tentang Kami-->
    <section class="page-section bg-light" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Tentang Kami</h2>
                <h3 class="section-subheading text-muted">
                    Frephy adalah sebuah platform inovatif
                    yang memahami betapa pentingnya dukungan dan koneksi dalam perjalanan
                    kesehatan mental Anda
                </h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="img/1.png" alt="misi">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Misi Kami :</h4>
                            <h4 class="subheading">Menjadi Sahabat Setia dalam Perjalanan Kesehatan Mental Anda</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Kami memiliki misi untuk membuat layanan kesehatan lebih mudah
                                diakses. Frephy berkomitmen untuk memberikan dukungan yang tidak hanya efektif tetapi
                                juga penuh empati </p>
                        </div>
                    </div>
                </li>


                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="img/2.png" alt="konselor">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Konselor untuk Anda:</h4>
                            <h4 class="subheading">Profesional Berkompeten dan Teman Sebaya yang Peduli</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Frephy menawarkan kebebasan untuk Anda memilih konselor yang sesuai
                                dengan kebutuhan. Mulai pilihan konselor profesional berlisensi yang memiliki pengalaman
                                luas, hingga teman sebaya yang dapat mendengarkan dan memahami perjalanan Anda secara
                                personal</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/3.png"
                            alt="daftar mudah">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4> Proses Mudah :</h4>
                            <h4 class="subheading">Daftar, Isi Profil, dan Mulai Perjalanan Anda</h4>
                        </div>
                        <div class="timeline-body">Frephy menyediakan proses pendaftaran yang mudah dan cepat. Anda
                            dapat mengisi kuesioner yang telah kami sediakan dan
                            mulai menjelajahi katalog konselor kami serta pilihlah konselor yang Anda butuhkan<p
                                class="text-muted"></p>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/4.png"
                            alt="jadwal">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Jadwal Konsultasi Fleksibel :</h4>
                            <h4 class="subheading">Jadwalkan waktu konsultasi Anda sesuai kebutuhan</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Frephy membantu Anda dalam menjadwalkan waktu konsultasi yang
                                fleksibel. Selain menyediakan konselor yang dapat Anda pilih sesuai kebutuhan, kami juga
                                menyediakan pilihan waktu yang fleksibel untuk Anda lalu mulailah konsultasi Anda dengan
                                konselor pilihan Anda</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4 class="mx-auto">
                            Ayo Bicarakan
                            <br>
                            Isi Hatimu
                            <br>
                            Bersama Frephy!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>

   <!-- Hubungi Kami -->
<section class="page-section text-white" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
            <h3 class="section-subheading">Jangan ragu untuk terhubung dengan kami!</h3>
        </div>
        <div class="container text-center">
            <div class="row align-items-center text-white">
                <!-- Informasi Kontak -->
                <div class="col-sm mb-4">
                    <h5>Info Kontak</h5>
                    <div class="contact-info">
                        <i class="fa-solid fa-envelope" style="color: #ffffff;">
                        </i>
                        <a href="mailto:info@frephy.com" class="text-warning">info@frephy.com</a>
                        <br>
                        <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                        <a href="tel:+123456789" class="text-warning">+123 456 789</a>
                        <br>
                        <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>
                        <span>Jalan Kesehatan Mental No. 42, Kota Sejahtera</span>
                    </div>
                </div>
                <!-- Media Sosial -->
                <div class="col-sm">
                    <h5>Sosial Media</h5>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#" target="_blank" class="btn btn-outline-light btn-social">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank" class="btn btn-outline-light btn-social">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank" class="btn btn-outline-light btn-social">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>






    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container my-auto">
            <div class="copyright text-center my-auto text-white">
                <span>Copyright &copy; Frephy 2023</span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script>
        document.getElementById('login').addEventListener('click', function() {
            window.location.href = '/login';
        });
    </script>
</body>

</html>
