@extends('layout.master')
@section('title', 'Beranda')
@section('content')

    {{-- welcome --}}
    <div class="card mb-3">
        <div class="card-body bg-warning rounded text-white">
            <h1><b>Hi, Mahasiswa1</b></h1>
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
                        Mari bersama-sama menjaga kesehatan mental Anda.
                        Dapatkan dukungan dan bimbingan melalui konsultasi sebaya dengan sahabat yang penuh perhatian
                        atau pilih panduan ahli dari konselor profesional kami. Temukan keseimbangan dan
                        kesejahteraan untuk kehidupan yang lebih baik.
                    </p>
                </div>
            </div>
        </div>
    </div>



@endsection
