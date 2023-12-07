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
    <!-- Card Aurelya Ayu Ramadhani -->
    <div class="col-md-4">
        <div class="card" style="width: 20rem;">
            <img src="https://i.pinimg.com/564x/1c/63/ee/1c63ee923cd6e4402c29ae9afdf1e247.jpg" class="card-img-top" alt="...">
            <div class="card-body text-left">
                <h5 class="card-title">Aurelya Ayu Ramadhani</h5>
                <!-- ... (Sisipkan konten card seperti ul dan button) ... -->
                <p class="card-text">
                    <ul style="padding-left: 0;">
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Relationship
                        </li>
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Kecemasan
                        </li>
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Pengembangan Diri
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
    <!-- Card Angela Citra -->
    <div class="col-md-4">
        <div class="card" style="width: 20rem;">
            <img src="https://i.pinimg.com/564x/c2/a1/18/c2a118b75a53cc7f95e2b0110e7e237b.jpg" class="card-img-top" alt="...">
            <div class="card-body text-left">
                <h5 class="card-title">Angela Dewi Citra Audia</h5>
                <!-- ... (Sisipkan konten card seperti ul dan button) ... -->
                <p class="card-text">
                    <ul style="padding-left: 0;">
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Relationship
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
                    data-bs-target="#angellamodal">
                      Profil Lengkap
                </button>
            </div>

            </div>
        </div>
    </div>
    <!-- Card dinsof -->
    <div class="col-md-4">
        <div class="card" style="width: 20rem;">
            <img src="https://i.pinimg.com/564x/0f/01/fd/0f01fd7ee72fa6603a84a023c1a6e7df.jpg" class="card-img-top" alt="...">
            <div class="card-body text-left">
                <h5 class="card-title">Dina Shofiana </h5>
                <!-- ... (Sisipkan konten card seperti ul dan button) ... -->
                <p class="card-text">
                    <ul style="padding-left: 0;">
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Relationship
                        </li>
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Kecemasan
                        </li>
                        <li style="list-style: none; margin-left: 0;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> Akademik
                        </li>
                    </ul>
                </p>
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-bs-toggle="modal"
                    data-bs-target="#dinsofmodal">
                      Profil Lengkap
                </button>
                </div>
                </div>

<!-- Modal 1 - Aurelya Ayu Ramadhani -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <img src="https://i.pinimg.com/564x/1c/63/ee/1c63ee923cd6e4402c29ae9afdf1e247.jpg"
                    class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                <p>
                    <h3><b class="text-dark">Aurelya Ayu Ramadhani</b></h3>
                </p>
                <p>
                    <span class="badge bg-primary rounded-pill text-white">Kecemasan</span>
                    <span class="badge bg-primary rounded-pill text-white">Stress</span>
                    <span class="badge bg-primary rounded-pill text-white">Percintaan</span>
                    <span class="badge bg-primary rounded-pill text-white">Keluarga</span> <br/>
                    <span class="badge bg-primary rounded-pill text-white">+4 Lainnya</span>
                </p>
                <div>
                <strong><h4 class="text-center" style="margin: 0; font-family: 'Roboto', sans-serif;">Profile Aurelya Ayu Ramadhani</h4></strong><br/>
    <p style="text-align: left; margin: 0;" >
        Eva merupakan seorang psikolog klinis lulusan Universitas Gadjah Mada yang memiliki keahlian dalam membantu klien usia remaja hingga dewasa. Eva telah membantu banyak klien dalam mengatasi masalah, seperti gangguan kecemasan, gangguan suasana hati, permasalahan keluarga, pasangan, serta pengembangan diri.
        <span id="dots">...</span>
        <span id="more" style="display: none;">
            Melalui sesi konseling, Eva ingin memberikan ruang yang bebas dan terbuka bagi klien untuk menceritakan kisahnya, mengekspresikan dirinya, dan mencapai potensi terbaik yang klien miliki dalam dirinya. Harapannya, klien dapat memahami, menerima, dan menghadirkan insight atas permasalahan yang dihadapi. Eva percaya bahwa setiap individu akan terus bertumbuh sepanjang hidupnya.
        </span>
        <button onclick="myFunctionAurelya()" id="myBtn" class="btn btn-primary btn-sm">Read more</button>
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
            onclick="jadwal()">Konseling Dengan Aurel</button>
            </div>
        </div>
    </div>
</div>
</div>
</div> 
</div> 

<!-- Modal 2 - Angela -->
<div class="modal fade" id="angellamodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <img src="https://i.pinimg.com/564x/c2/a1/18/c2a118b75a53cc7f95e2b0110e7e237b.jpg"
                    class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                <p>
                    <h3><b class="text-dark">Angeli Audia</b></h3>
                </p>
                <p>
                    <span class="badge bg-primary rounded-pill text-white">Kecemasan</span>
                    <span class="badge bg-primary rounded-pill text-white">Stress</span>
                    <span class="badge bg-primary rounded-pill text-white">Percintaan</span>
                    <span class="badge bg-primary rounded-pill text-white">Pekerjaan</span> <br/>
                    <span class="badge bg-primary rounded-pill text-white">+4 Lainnya</span>
                </p>
                <div>
                <strong><h4 class="text-center" style="margin: 0; font-family: 'Roboto', sans-serif;">Profile Angela Audia</h4></strong><br/>
    <p style="text-align: left; margin: 0;" >
    Angela Dewi Citra Audia, mahasiswa berbakat dari Universitas Negeri Malang, tengah menekuni perjalanan pendidikan yang akan membentuknya menjadi seorang konselor sebaya yang ulung. Dalam perjalanannya, Angela telah menunjukkan fokusnya yang luar biasa dalam membantu teman-teman seangkatannya, baik yang masih berada di fase remaja maupun yang sudah memasuki dunia dewasa. Keahliannya melibatkan penanganan berbagai permasalahan kompleks, seperti gangguan kecemasan, ketidakseimbangan suasana hati, dinamika keluarga, tantangan dalam hubungan asmara, dan upaya pengembangan diri.
        <span id="more" style="display: none;">
        <br><br>Dengan landasan pendidikan yang solid dari Universitas Negeri Malang, Angela tidak hanya memperoleh pengetahuan teoritis yang kuat, tetapi juga pengalaman praktis yang berharga. Komitmennya terhadap bidang ini tercermin dalam dedikasinya untuk memberikan dukungan emosional dan panduan konstruktif kepada rekan-rekannya sejawat. Angela percaya bahwa membentuk kesehatan mental dan kesejahteraan sosial adalah langkah penting dalam perjalanan pembentukan diri. Dengan kepribadian yang hangat dan penyampaian yang bijaksana, Angela siap menjelajahi peran sebagai konselor sebaya yang akan menjadi pilar keberhasilan banyak individu di sekitarnya.        <span id="dots">...</span>
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
</div>
</div>
</div>
             <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-primary btn-lg" style="border-radius: 10px;" 
            onclick="jadwal()">Konseling Dengan Angela</button>
            </div>
        </div>
    </div>
</div>
</div>
</div> 
</div> 


<!-- Modal 3 - Dina Shofiana -->
<div class="modal fade" id="dinsofmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <img src="https://i.pinimg.com/564x/0f/01/fd/0f01fd7ee72fa6603a84a023c1a6e7df.jpg"
                    class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                <p>
                    <h3><b class="text-dark">Dina Shofiana</b></h3>
                </p>
                <p>
                    <span class="badge bg-primary rounded-pill text-white">Kecemasan</span>
                    <span class="badge bg-primary rounded-pill text-white">Stress</span>
                    <span class="badge bg-primary rounded-pill text-white">Percintaan</span>
                    <span class="badge bg-primary rounded-pill text-white">Keluarga</span> <br/>
                    <span class="badge bg-primary rounded-pill text-white">+4 Lainnya</span>
                </p>
                <div>
                <strong><h4 class="text-center" style="margin: 0; font-family: 'Roboto', sans-serif;">Profile Aurelya Ayu Ramadhani</h4></strong><br/>
    <p style="text-align: left; margin: 0;" >
    Dina Shofianaana, seorang mahasiswa Universitas Negeri Malang, tengah mengejar gelar dalam bidang psikologi klinis. Dia sedang mengembangkan keahliannya dalam membantu rekan seumurannya, mulai dari remaja hingga dewasa, dalam mengatasi berbagai masalah seperti gangguan kecemasan, suasana hati, konflik keluarga, hubungan pasangan, dan pengembangan diri. <span id="dots">...</span>
        <span id="more" style="display: none;">
        Dina Shofiana telah berkomitmen untuk menjadi seorang konselor sebaya yang mampu memberikan dukungan emosional dan bimbingan kepada teman-temannya dalam perjalanan pengembangan pribadi mereka.                </span>
        <button onclick="myFunctionAurelya()" id="myBtn" class="btn btn-primary btn-sm">Read more</button>
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
            onclick="jadwal()">Konseling Dengan Dina</button>
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
