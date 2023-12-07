@extends('layout.master')
@section('title', 'Tes Kesehatan Mental')
@section('content')

    <!-- Konten -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm">
                <img src="img/tes.png" alt="mental" class="img-fluid">
            </div>
            <div class="col-sm">
                <div class="container-fluid">
                    <h1 class="text-gray-800"><b>Tes Kesehatan Mental</b></h1>
                    <p>Bagaimana kabarmu akhir-akhir ini? Cek kondisi kesehatan mentalmu yuk!</p>
                    <button id="tes" type="button" class="btn btn-warning"
                        style="width:145px; border-radius:20px;">Mulai</button>
                    <h5 class="mt-3 text-gray-800">Baca panduan pengisiannya, yuk!</h1>
                        <p>1. Gak ada jawaban yang benar atau salah. Isi lah dengan jujur sesuai kepribadianmu. <br>
                            2. Santai aja, tes ini gak diberi waktu, kok. <br>
                            3. Cari tempat yang nyaman dan kondusif supaya kamu lebih fokus. <br>
                            4. Jika kamu keluar di tengah tes, maka seluruh proses tes dan jawaban akan hilang. <br>
                            5. Hasil tes bisa kamu dapatkan setelah mengisi semua pertanyaan dengan lengkap. <br>

                            <br>
                            Selamat mengisi, ya!
                        </p>
                </div>
            </div>
        </div>
    </div>



    <script>
        document.getElementById('tes').addEventListener('click', function() {
            window.location.href = '/quiz-m';
        });
    </script>


@endsection
