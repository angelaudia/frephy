@extends('layout.master-a')
@section('title', 'Beranda')
@section('content')

    {{-- welcome --}}
    <div class="card mb-3">
        <div class="card-body bg-warning rounded text-white">
            <h1><b>Hi, Admin1</b></h1>
            <span>Bagaimana kabarmu hari ini?</span>
        </div>
    </div>

    {{-- content --}}
    <div class="card shadow-sm mb-5 rounded">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="img/welcome.png" class="card-img-top img-fluid" alt="dashboard">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title h3 text-gray-800">Selamat datang di Dashboard FREPHY! </h5>
                    <span>"Your mental health is just as important as your physical health."</span>
                    <hr>
                    <p class="card-text">
                        Sebagai seorang psikolog, kami siap membantu menjalani perjalanan kehidupan dengan
                        memberikan layanan konseling dan dukungan yang dibutuhkan.
                    </p>
                    <p class="card-text">
                        Bersama-sama, kita dapat mencapai kesejahteraan mental yang lebih baik. Ingatlah bahwa
                        kesehatan mental sama pentingnya dengan kesehatan fisik manusia.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('tes').addEventListener('click', function() {
            window.location.href = '/m/quiz';
        });
    </script>




@endsection
