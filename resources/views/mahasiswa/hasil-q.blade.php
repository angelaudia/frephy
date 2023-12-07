@extends('layout.master')
@section('title', 'Tes Kesehatan Mental')
@section('content')

    <button id="backButton" type="button" class="btn btn-outline-warning">
        <i class="fa-solid fa-arrow-left"></i>
    </button>
    <span class="h4 mt-3 pl-2 text-gray-800">Hasil Tes</span>


    {{-- card-pertanyaan --}}
    <div class="container-fluid text-center">
        <div class="card mt-3">
            <div class="card-body">
                <h2 class="mb-3 text-gray-800">Kondisimu Tidak Stabil</h2>
                <img src="img/mental.png" alt="Kondisi Tidak Stabil" style="width: 25%; height: 25%;">
                <div class="container">
                    <p class="text-gray-800">Kondisi kesehatan mental kamu tidak stabil. Saat ini kamu mengalami tekanan
                        lebih banyak dari biasanya.
                        Kamu mungkin mulai merasa ragu apakah kamu dapat menangani tekanan yang kamu rasakan sekarang.
                        Sangat disarankan untuk melakukan konsultasi dengan konselor.</p>
                </div>

                {{-- button submit --}}
                <div class="d-grid gap-2 text-center">
                    <button class="btn btn-info" type="button"
                        style="display: block; width: 50%; border-radius:20px; margin: auto;">
                        Jadwalkan Konselor Sekarang
                    </button>
                    <button id="kembali" class="btn btn-outline-info" type="button"
                        style="display: block; width: 50%; border-radius:20px; margin: auto;">
                        Kembali ke Halaman Tes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kembali').addEventListener('click', function() {
            window.location.href = '/tes-m';
        });

        // Menambahkan event listener untuk tombol "Back"
        document.getElementById('backButton').addEventListener('click', function() {
            window.location.href = '/quiz-m';
        });
    </script>


@endsection
