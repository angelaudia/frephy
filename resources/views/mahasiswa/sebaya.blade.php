@extends('layout.master')
@section('title', 'Konselor Profesional')
@section('content')
    <style>
        #more {
            display: none;
        }

        li {
            list-style: none;
        }

        li i.fa-regular.fa-circle-check {
            display: inline-block;
            font-size: 1.5em;
        }

        .read-more-button {
            background: none !important;
            border: none;
            padding: 0 !important;
            font: inherit;
            cursor: pointer;
            outline: inherit;
            color: #007BFF;
        }

        .read-more-button:hover {
            color: darkblue;
        }

        .read-more-button:active,
        .read-more-button:focus {
            color: #007BFF;
        }
    </style>

    {{-- Page Heading --}}
    <h1 class="h3 mb-4 text-gray-800">Konselor Sebaya</h1>

    <div class="container-fluid">
        <div class="row">
            <!-- Card Aurelya Ayu Ramadhani -->
            <div class="col-md-6">
                <div class="card" style="width: 20rem;">
                    <img src="https://i.pinimg.com/564x/1c/63/ee/1c63ee923cd6e4402c29ae9afdf1e247.jpg" class="card-img-top"
                        alt="profil-aurel">
                    <div class="card-body text-left">
                        <h5 class="card-title text-dark">Aurelya Ayu Ramadhani</h5>
                        <p class="card-text text-gray-600" style="font-size: 15px;">
                            <label for="keahlian">
                                Bidang Keahlian:
                            </label>
                            <span>Kecemasan, Relationship, dan Pengembangan Diri</span>
                        </p>
                        <button type="button" class="btn btn-primary d-flex justify-content-center" data-bs-toggle="modal"
                            data-bs-target="#modal1">
                            Profil Lengkap
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal 1 - Aurelya Ayu Ramadhani -->
            <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div>
                                <button id="backButton" type="button" class="btn btn-outline-warning" aria-label="Close"
                                    data-bs-dismiss="modal">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                                <span class="modal-tile  fs-5 h5 mt-3 pl-2 text-gray-800">Detail Konselor Sebaya</span>
                                <div class="modal-body text-center text-dark">
                                    <img src="https://i.pinimg.com/564x/1c/63/ee/1c63ee923cd6e4402c29ae9afdf1e247.jpg"
                                        class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                                    <p>
                                    <h3><b class="text-dark">Aurelya Ayu Ramadhani</b></h3>
                                    </p>
                                    <div>
                                        <strong>
                                            <h4 class="text-center" style="margin: 0; font-family: 'Roboto', sans-serif;">
                                                Profile Aurelya Ayu Ramadhani</h4>
                                        </strong><br />
                                        <p style="text-align: left; margin: 0;">
                                            Aurelya Ayu Ramadhani, atau Aurel, adalah mahasiswi psikologi di Universitas
                                            Negeri Malang yang saat ini sedang menjalani magang sebagai konselor sebaya di
                                            Frephy.
                                            <span id="dots">...</span>
                                            <span id="more" style="display: none;">
                                                Aurel siap membantu sahabat frephy mengatasi masalah mental seperti
                                                kecemasan
                                                dan suasana hati. Dengan pendekatan empati, Aurel menciptakan lingkungan
                                                yang
                                                mendukung pertumbuhan pribadi, membantu sahabat frephy mencapai wawasan diri
                                                dan
                                                kesehatan mental yang lebih baik.
                                            </span>
                                            <button onclick="myFunctionAurelya()" id="myBtn"
                                                class="btn btn-primary btn-sm read-more-button">Read more</button>

                                        </p><br />
                                        <div class="modal-text text-left" style="margin: 0;">
                                            <hr style="border-top: 1px solid grey; margin: 0;" class="my-0">
                                            <ul style="padding-left: 0; margin: 0;">
                                                <li style="list-style: none; margin-left: 0;">
                                                    <i class="fa-solid fa-graduation-cap" style="color: #0c7fb0;"></i>
                                                    Pendidikan
                                                    <ol style="margin: 0;">
                                                        <li style="margin: 0;">
                                                            S1 Psikologi
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    </p>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 10px;"
                                            onclick="jadwal()">Konseling Dengan
                                            Aurel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS Bootstrap (dan Popper.js) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

        <script>
            // Fungsi Read More Aurel
            function myFunctionAurelya() {
                var dotsv = document.getElementById("dotsv");
                var moreTextv = document.getElementById("morev");
                var btnTextv = document.getElementById("myBtnv");

                if (dotsv.style.display === "none") {
                    dotsv.style.display = "inline";
                    btnTextv.innerHTML = "Read more";
                    moreTextv.style.display = "none";
                    btnTextv.style.color = "darkblue";
                } else {
                    dotsv.style.display = "none";
                    btnTextv.innerHTML = "Read less";
                    moreTextv.style.display = "inline";
                    btnTextv.style.color = "#007BFF";
                }
            }

            function myFunctionAurelya() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }

            function jadwal() {
                window.location.href = "/booking";
            }
        </script>

    @endsection
