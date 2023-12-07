@extends('layout.master')
@section('title', 'Tes Kesehatan Mental')
@section('content')

<div class="container-fluid">
    <button id="backButton" type="button" class="btn btn-outline-warning">
        <i class="fa-solid fa-arrow-left"></i>
    </button>
    <span class="h4 mt-3 pl-2 text-gray-800">Tes Kesehatan Mental</span>
</div>

{{-- card-pertanyaan --}}
<div class="container-fluid">


        <div class="card mt-3">
            <div class="card-body">
              <span>Dalam 2 minggu terakhir</span>
              <h4 class="h4 mb-3 text-gray-800">Seberapa sering kamu merasa terganggu oleh hal berikut...</h4>

              <form action="quiz" method="GET">
                 {{-- Pertanyaan 1 --}}
              <span class="mb-3 text-gray-800">Merasa gugup, cemas, atau gelisah?</span>
              <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                <div class="container text-center text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <input type="radio" id="tidak_pernah" name="mood" value="tidak_pernah" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Tidak Pernah</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="beberapa_hari" name="mood" value="beberapa_hari" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Beberapa Hari</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="sebagian_besar" name="mood" value="sebagian_besar" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Sebagian Besar Hari</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="selalu" name="mood" value="selalu" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Setiap Hari</label>
                        </div>
                    </div>
                </div>
              </div>

              {{-- Pertanyaan 2 --}}
              <span class="mb-3 text-gray-800">Tidak dapat menghentikan atau mengontrol kekhawatiran?</span>
              <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                <div class="container text-center text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <input type="radio" id="tidak_pernah" name="mood" value="tidak_pernah" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Tidak Pernah</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="beberapa_hari" name="mood" value="beberapa_hari" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Beberapa Hari</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="sebagian_besar" name="mood" value="sebagian_besar" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Sebagian Besar Hari</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="selalu" name="mood" value="selalu" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Setiap Hari</label>
                        </div>
                    </div>
                </div>
              </div>

              {{-- Pertanyaan 3 --}}
              <span class="mb-3 text-gray-800">Terlalu banyak mengkhawatirkan berbagai hal?</span>
              <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                <div class="container text-center text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <input type="radio" id="tidak_pernah" name="mood" value="tidak_pernah" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Tidak Pernah</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="beberapa_hari" name="mood" value="beberapa_hari" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Beberapa Hari</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="sebagian_besar" name="mood" value="sebagian_besar" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Sebagian Besar Hari</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="selalu" name="mood" value="selalu" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="html" style="display: block;">Setiap Hari</label>
                        </div>
                    </div>
                </div>
              </div>

              {{-- Pertanyaan 4 --}}
              <span class="mb-3 text-gray-800">Sulit merasa santai?</span>
              <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                <div class="container text-center text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <input type="radio" id="tidak_pernah" name="mood" value="tidak_pernah" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="tidak_pernah" style="display: block;">Tidak Pernah</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="beberapa_hari" name="mood" value="beberapa_hari" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="beberapa_hari" style="display: block;">Beberapa Hari</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="sebagian_besar" name="mood" value="sebagian_besar" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="sebagian_besar" style="display: block;">Sebagian Besar Hari</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="selalu" name="mood" value="selalu" style="transform: scale(1.5); margin: 0.5px;">
                            <label for="selalu" style="display: block;">Setiap Hari</label>
                        </div>
                    </div>
                </div>
              </div>

              {{-- button submit --}}
              <div class="d-grid gap-2 text-center">
                <button id="kirimButton" class="btn btn-warning w-50" type="button">Kirim</button>
            </div>
              </form>
            </div>
        </div>
</div>

<script>
    // Menambahkan event listener untuk tombol "Kirim"
    document.getElementById('kirimButton').addEventListener('click', function() {
        // Mengarahkan pengguna ke halaman hasil-q
        window.location.href = '/hasil';
    });

    // Menambahkan event listener untuk tombol "Back"
    document.getElementById('backButton').addEventListener('click', function() {
        window.location.href = '/tes';
    });
</script>


@endsection
