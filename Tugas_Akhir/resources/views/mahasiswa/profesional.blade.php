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
</style>

{{-- Page Heading --}}
<h1 class="h3 mb-4 text-gray-800">Konselor Profesional</h1>

<!-- Menggunakan sistem grid -->
<div class="row">
    <!-- Card Joana -->
    <div class="col-md-4">
        <div class="card" style="width: 20rem;">
            <img src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA2L3Y4NjUtdGVjaGktNThfMV8xLmpwZw.jpg" class="card-img-top" alt="...">
            <div class="card-body text-left">
                <h5 class="card-title">Joana Novena Putri, M.Psi., Psikolog</h5>
                <!-- ... (Sisipkan konten card seperti ul dan button) ... -->
                <p class="card-text">
                    <ul style="padding-left: 0;">
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

    <div class="row">
    <!-- Card Fika -->
    <div class="col-md-4">
        <div class="card" style="width: 20rem;">
            <img src="https://i.pinimg.com/564x/a0/82/36/a08236c97dca06bc5b6d5711cef3b613.jpg" class="card-img-top" alt="...">
            <div class="card-body text-left">
                <h5 class="card-title">Fika Frahesti Yunita, M. Psi., CGA., Psikolog</h5>
                <!-- ... (Sisipkan konten card seperti ul dan button) ... -->
                <p class="card-text">
                    <ul style="padding-left: 0;">
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Spiritual
                        </li>
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Pekerjaan
                        </li>
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Keluarga
                        </li>
                    </ul>
                </p>
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-bs-toggle="modal"
                    data-bs-target="#fikamodal">
                      Profil Lengkap
                </button>
            </div>

            </div>
        </div>
    </div>
    <!-- Card arief -->
    <div class="col-md-4">
        <div class="card" style="width: 20rem;">
            <img src="https://i.pinimg.com/564x/95/4c/ee/954cee9c4a484562749d95023c415a1e.jpg" class="card-img-top" alt="...">
            <div class="card-body text-left">
                <h5 class="card-title">Arief Liang, M.Psi, Psikolog, FPCM </h5>
                <!-- ... (Sisipkan konten card seperti ul dan button) ... -->
                <p class="card-text">
                    <ul style="padding-left: 0;">
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Finansial
                        </li>
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Stress
                        </li>
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Pekerjaan 
                        </li>
                    </ul>
                </p>
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-bs-toggle="modal"
                    data-bs-target="#ariefmodal">
                      Profil Lengkap
                </button>
                </div>
                </div>
<!-- Modal 1 - joana -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- ... (sesuaikan dengan modal pertama) ... -->
            <div class="modal-header">
            <div>
                 <button id="backButton" type="button" class="btn btn-outline-warning" aria-label="Close" data-bs-dismiss="modal" >
                   <i class="fa-solid fa-arrow-left"></i>
               </button>
               <span class="modal-tile  fs-5 h5 mt-3 pl-2 text-gray-800">Detail Konselor Profesional</span>
            <div class="modal-body text-center text-dark">
                <img src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA2L3Y4NjUtdGVjaGktNThfMV8xLmpwZw.jpg"
                    class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                <p>
                    <h3><b class="text-dark">Joana Novena Putri, M.Psi., Psikolog</b></h3>
                </p>
                <p>
                    <span class="badge bg-primary rounded-pill text-white">Kecemasan</span>
                    <span class="badge bg-primary rounded-pill text-white">Stress</span>
                    <span class="badge bg-primary rounded-pill text-white">Akademis</span>
                    <span class="badge bg-primary rounded-pill text-white">Integrasi Diri</span> <br/>
                    <span class="badge bg-primary rounded-pill text-white">+4 Lainnya</span>
                </p>
                <div>
                <strong><h4 class="text-center" style="margin: 0; font-family: 'Roboto', sans-serif;">Profile Joana Novena Putri</h4></strong><br/>
                  <p style="text-align: left; margin: 0;" >
                    Joana atau yang biasa lebih sering dipanggil Vena merupakan Psikolog Klinis dari Universitas Padjadjaran yang memiliki ketertarikan dalam membantu individu        <span id="dots">...</span>
                 <span id="more" style="display: none;">
                    dewasa muda untuk lebih mengenal dirinya sendiri dan juga mengembangkan potensi dalam dirinya. Ia juga memiliki keahlian dalam menangani kasus terkait masalah tumbuh kembang anak, relasi orangtua dan anak, permasalahan sosial emosional, anak berkebutuhan khusus, dan permasalahan belajar. Vena memiliki misi untuk membantu klien mengenal dan juga mengembangkan dirinya.
                </span>
                <button onclick="myFunctionAurelya()" id="myBtn" class="btn btn-primary btn-sm">Read more</button>
                 </p><br/>
    <div class="modal-text text-left" style="margin: 0;">
        <hr style="border-top: -1px solid grey; margin: 0;" class="my-0">
            <ul style="padding-left: 0; margin: 0;">
                <li style="list-style: none; margin-left: 0;">
                    <i class="fa-solid fa-graduation-cap" style="color: #0c7fb0;"></i> Pendidikan
                    <ol style="margin: 0;">
                        <li style="margin: 0;">
                            S1 Pendidikan Teknik Informatika
                        </li>
                    </ol>
                </li>
                <li style="list-style: none; margin-left: 0;">
                <i class="fa-solid fa-user-shield" style="color: #0742f2;"></i>  Nomor Izin Praktek 
                <ol style="margin: 0;">
                        <li style="margin: 0;">
                        SIPP: 0079-SIPP-2022/20190609-2022-01-0079
                        </li>
                    </ol>       
                </li>
            </ul>
    </div>
</div>
            </p>
             <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-primary btn-lg" style="border-radius: 20px;" 
            onclick="jadwal()">Konseling Dengan Joana</button>
            </div>
        </div>
    </div>
</div>
</div>
</div> 
</div> 

<!-- Modal 2 - Fika -->
<div class="modal fade" id="fikamodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- ... (sesuaikan dengan modal pertama) ... -->
            <div class="modal-header">
            <div>
                 <button id="backButton" type="button" class="btn btn-outline-warning" aria-label="Close" data-bs-dismiss="modal" >
                   <i class="fa-solid fa-arrow-left"></i>
               </button>
               <span class="modal-tile  fs-5 h5 mt-3 pl-2 text-gray-800">Detail Konselor Sebaya</span>
            <div class="modal-body text-center text-dark">
                <img src="https://i.pinimg.com/564x/a0/82/36/a08236c97dca06bc5b6d5711cef3b613.jpg"
                    class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                <p>
                    <h3><b class="text-dark">Fika Frahesti Yunita, M. Psi., CGA., Psikolog</b></h3>
                </p>
                <p>
                    <span class="badge bg-primary rounded-pill text-white">Kecemasan</span>
                    <span class="badge bg-primary rounded-pill text-white">Stress</span>
                    <span class="badge bg-primary rounded-pill text-white">Percintaan</span>
                    <span class="badge bg-primary rounded-pill text-white">Pekerjaan</span> <br/>
                    <span class="badge bg-primary rounded-pill text-white">+4 Lainnya</span>
                </p>
                <div>
                <strong><h4 class="text-center" style="margin: 0; font-family: 'Roboto', sans-serif;">Profile Fika Frahesti Yunita</h4></strong><br/>
                <p style="text-align: left; margin: 0;" >
                        Fika menyelesaikan studinya di Magister Psikologi Universitas Tarumanegara dengan spesialisasi klinis anak dan dewasa. Kesenangannya membagi ilmu juga memotivasinya untuk menjadi dosen honorer di salah satu perguruan tinggi swasta di Jakarta. Saat ini, ia berpraktik sebagai psikolog klinis di salah satu rumah sakit swasta di Tangerang.        
                    <span id="more" style="display: none;">
                Dari berbagai kasus yang pernah ditangani, ia berpengalaman dalam bidang perkembangan anak & remaja, keluarga, hubungan interpersonal, self-improvement, emosi dan komunikasi. Dengan mottonya “Tidak ada masalah yang tidak ada jalan keluarnya”, ia mempunyai misi untuk membantu menggali potensi positif dalam dirimu — sehingga kamu bisa merasa percaya diri untuk melihat masalah hidup sebagai tantangan untuk terus tumbuh dan berkembang.         
                <span id="dots">...</span>
                </span>
        <button onclick="myFunctionDina()" id="myBtn" class="btn btn-primary btn-sm">Read more</button>
        </p><br/>
    <div class="modal-text text-left" style="margin: 0;">
        <hr style="border-top: 1px solid grey; margin: 0;" class="my-0">
        <ul style="padding-left: 0; margin: 0;">
                <li style="list-style: none; margin-left: 0;">
                    <i class="fa-solid fa-graduation-cap" style="color: #0c7fb0;"></i> Pendidikan
                    <ol style="margin: 0;">
                        <li style="margin: 0;">
                        S2 Magister Psikologi Profesi Klinis Universitas Tarumanagara
                        </li>
                        <li style="margin: 0;">
                        S1 Sarjana Psikologi Universitas Tarumanagara                        </li>
                    </ol>
                </li>
                <li style="list-style: none; margin-left: 0;">
                <i class="fa-solid fa-user-shield" style="color: #0742f2;"></i>  Nomor Izin Praktek 
                <ol style="margin: 0;">
                        <li style="margin: 0;">
                        SIPP: 0079-SIPP-2022/20190609-2022-01-0079
                        </li>
                    </ol>       
                </li>
            </ul>
    </div>
</div>
</div>
</div>
</div>
             <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-primary btn-lg" style="border-radius: 10px;" 
            onclick="jadwal()">Konseling Dengan Fika</button>
            </div>
        </div>
    </div>
</div>
</div>
</div> 
</div> 


<!-- Modal 3 - arief -->
<div class="modal fade" id="ariefmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- ... (sesuaikan dengan modal pertama) ... -->
            <div class="modal-header">
            <div>
                 <button id="backButton" type="button" class="btn btn-outline-warning" aria-label="Close" data-bs-dismiss="modal" >
                   <i class="fa-solid fa-arrow-left"></i>
               </button>
               <span class="modal-tile  fs-5 h5 mt-3 pl-2 text-gray-800">Detail Konselor Sebaya</span>
            <div class="modal-body text-center text-dark">
                <img src="https://i.pinimg.com/564x/95/4c/ee/954cee9c4a484562749d95023c415a1e.jpg"
                    class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                <p>
                    <h3><b class="text-dark">Arief Liang, M.Psi, Psikolog, FPCM</b></h3>
                </p>
                <p>
                    <span class="badge bg-primary rounded-pill text-white">Kecemasan</span>
                    <span class="badge bg-primary rounded-pill text-white">Stress</span>
                    <span class="badge bg-primary rounded-pill text-white">Percintaan</span>
                    <span class="badge bg-primary rounded-pill text-white">Keluarga</span> <br/>
                    <span class="badge bg-primary rounded-pill text-white">+4 Lainnya</span>
                </p>
                <div>
                <strong><h4 class="text-center" style="margin: 0; font-family: 'Roboto', sans-serif;">Profile Arief Liang</h4></strong><br/>
    <p style="text-align: left; margin: 0;" >
    Arief adalah seorang psikolog klinis lulusan Universitas Tarumanagara tahun 2017. Arief sudah mengikuti program sertifikasi filial play coaching/mentoring dari Cipta Aliansi Edukasi, dan juga pelatihan art therapy dan menjadi anggota resmi dari Indonesian Art Therapy Community.         
    <span id="more" style="display: none;">
    Sebagai psikolog, Arief percaya bahwa setiap individu memiliki keunikan tersendiri dan memiliki cara yang khas dalam menyikapi tantangan kehidupan. Dalam praktiknya, Arief banyak menangani kasus yang berkaitan dengan kecemasan, penerimaan diri, serta relasi orangtua dan anak. Umumnya, Arief menerapkan art therapy dan client-centered therapy untuk mendukung perubahan positif dalam diri klien.     
    </span>
        <button onclick="myFunctionAngella()" id="myBtn" class="btn btn-primary btn-sm">Read more</button>
        </p><br/>
    <div class="modal-text text-left" style="margin: 0;">
        <hr style="border-top: 1px solid grey; margin: 0;" class="my-0">
            <ul style="padding-left: 0; margin: 0;">
                <li style="list-style: none; margin-left: 0;">
                    <i class="fa-solid fa-graduation-cap" style="color: #0c7fb0;"></i> Pendidikan
                    <ol style="margin: 0;">
                        <li style="margin: 0;">
                            S1 Pendidikan Teknik Informatika
                        </li>
                    </ol>
                </li>
            </ul>
    </div>
</div>
            </p>
             <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-primary btn-lg" style="border-radius: 10px;" 
            onclick="jadwal()">Konseling Dengan Arief</button>
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
    function myFunctionAurelya() {
        var dotsv = document.getElementById("dotsv");
        var moreTextv = document.getElementById("morev");
        var btnTextv = document.getElementById("myBtnv");

        if (dotsv.style.display === "none") {
            dotsv.style.display = "inline";
            btnTextv.innerHTML = "Read more";
            moreTextv.style.display = "none";
        } else {
            dotsv.style.display = "none";
            btnTextv.innerHTML = "Read less";
            moreTextv.style.display = "inline";
        }
    }

    function myFunctionAngella() {
        // Fungsi untuk modal Angela
        var dotsv = document.getElementById("dotsv");
        var moreTextv = document.getElementById("morev");
        var btnTextv = document.getElementById("myBtnv");

        if (dotsv.style.display === "none") {
            dotsv.style.display = "inline";
            btnTextv.innerHTML = "Read more";
            moreTextv.style.display = "none";
        } else {
            dotsv.style.display = "none";
            btnTextv.innerHTML = "Read less";
            moreTextv.style.display = "inline";
        }
    }

    function myFunctionDina() {
        // Fungsi untuk modal Dina
        var dotsv = document.getElementById("dotsv");
        var moreTextv = document.getElementById("morev");
        var btnTextv = document.getElementById("myBtnv");

        if (dotsv.style.display === "none") {
            dotsv.style.display = "inline";
            btnTextv.innerHTML = "Read more";
            moreTextv.style.display = "none";
        } else {
            dotsv.style.display = "none";
            btnTextv.innerHTML = "Read less";
            moreTextv.style.display = "inline";
        }
    }function myFunctionAurelya() {
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

    // Fungsi-fungsi untuk modal Angela dan Dina (jika diperlukan)
    function myFunctionAngela() {
        // Fungsi untuk modal Angela
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

    function myFunctionDina() {
        // Fungsi untuk modal Dina
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
