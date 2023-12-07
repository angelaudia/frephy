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
    <h1 class="h3 mb-4 text-gray-800">Konselor Profesional</h1>

    <div class="container-fluid">
        <div class="row">
            <!-- Card Joana -->
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA2L3Y4NjUtdGVjaGktNThfMV8xLmpwZw.jpg"
                        class="card-img-top" alt="profile-joana">
                    <div class="card-body text-left">
                        <h5 class="card-title text-dark">Joana Novena Putri, M.Psi., Psikolog</h5>
                        <p class="card-text">
                        <ul style="padding-left: 0; color:#007BFF">
                            <li style="list-style: none; margin-left: 0;">
                                <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Gangguan Kesulitan Tidur
                            </li>
                            <li style="list-style: none; margin-left: 0;">
                                <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Kecemasan
                            </li>
                            <li style="list-style: none; margin-left: 0;">
                                <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Integrasi Diri
                            </li>
                        </ul>
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
                                    <img src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA2L3Y4NjUtdGVjaGktNThfMV8xLmpwZw.jpg"
                                        class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                                    <p>
                                    <h3><b class="text-dark">Joana Novena Putri, M.Psi., Psikolog</b></h3>
                                    </p>
                                    <p>
                                        <span class="badge bg-primary rounded-pill text-white">Kecemasan</span>
                                        <span class="badge bg-primary rounded-pill text-white">Stress</span>
                                        <span class="badge bg-primary rounded-pill text-white">Percintaan</span>
                                        <span class="badge bg-primary rounded-pill text-white">Keluarga</span> <br />
                                        <span class="badge bg-primary rounded-pill text-white">+4 Lainnya</span>
                                    </p>
                                    <div>
                                        <strong>
                                            <h4 class="text-center" style="margin: 0; font-family: 'Roboto', sans-serif;">
                                                Profile Joana Novena Putri</h4>
                                        </strong><br />
                                        <p style="text-align: left; margin: 0;">
                                            Joana atau yang biasa lebih sering dipanggil Vena merupakan Psikolog Klinis dari
                                            Universitas Padjadjaran yang memiliki ketertarikan dalam membantu individu.
                                            <span id="dots">...</span>
                                            <span id="more" style="display: none;">
                                                dewasa muda untuk lebih mengenal dirinya sendiri dan juga mengembangkan
                                                potensi dalam dirinya. Ia juga memiliki keahlian dalam menangani kasus
                                                terkait masalah tumbuh kembang anak, relasi orangtua dan anak, permasalahan
                                                sosial emosional, anak berkebutuhan khusus, dan permasalahan belajar. Vena
                                                memiliki misi untuk membantu klien mengenal dan juga mengembangkan dirinya.
                                            </span>
                                            <button onclick="myFunctionJoana()" id="myBtn"
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
                                            Joana</button>
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
                // Fungsi Read More Joana
                function myFunctionJoana() {
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

                function myFunctionJoana() {
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
