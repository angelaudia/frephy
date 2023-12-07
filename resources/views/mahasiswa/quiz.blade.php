@extends('layout.master')
@section('title', 'Tes Kesehatan Mental')
@section('content')

    {{-- Page --}}
    <button id="backButton" type="button" class="btn btn-outline-warning">
        <i class="fa-solid fa-arrow-left"></i>
    </button>
    <span class="h4 mt-3 pl-2 text-gray-800">Tes Kesehatan Mental</span>

    {{-- card-pertanyaan --}}
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-body">
                <span>Dalam satu bulan terakhir</span>
                <h4 class="h4 mb-3 text-gray-800">Seberapa sering kamu merasakan hal berikut...</h4>

                <form action="quiz" method="POST">

                    {{-- Pertanyaan 1 --}}
                    <span class="mb-3 text-gray-800">Merasa tidak sanggup mengatasi kesulitan?</span>
                    <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                        <div class="container text-center text-white">
                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <input type="radio" id="0" name="p1" value="0"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="0" style="display: block;">Sangat berkurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="1" name="p1" value="1"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="1" style="display: block;">Kurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="2" name="p1" value="2"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="2" style="display: block;">Sama saja seperti biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="3" name="p1" value="3"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="3" style="display: block;">Iya, lebih dari biasanya</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Pertanyaan 2 --}}
                    <span class="mb-3 text-gray-800">Merasa tidak bahagia dan tertekan?</span>
                    <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                        <div class="container text-center text-white">
                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <input type="radio" id="4" name="p2" value="4"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="4" style="display: block;">Sangat berkurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="5" name="p2" value="5"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="5" style="display: block;">Kurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="6" name="p2" value="6"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="6" style="display: block;">Sama saja seperti biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="7" name="p2" value="7"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="7" style="display: block;">Iya, lebih dari biasanya</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Pertanyaan 3 --}}
                    <span class="mb-3 text-gray-800">Merasa sulit untuk mengambil keputusan?</span>
                    <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                        <div class="container text-center text-white">
                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <input type="radio" id="8" name="p3" value="8"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="8" style="display: block;">Sangat berkurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="9" name="p3" value="9"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="9" style="display: block;">Kurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="10" name="p3" value="10"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="10" style="display: block;">Sama saja seperti biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="11" name="p3" value="11"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="11" style="display: block;">Iya, lebih dari biasanya</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Pertanyaan 4 --}}
                    <span class="mb-3 text-gray-800">Merasa mampu melakukan hal-hal yang bermanfaat dalam hidup?</span>
                    <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                        <div class="container text-center text-white">
                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <input type="radio" id="12" name="p4" value="12"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="12" style="display: block;">Sangat berkurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="13" name="p4" value="13"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="13" style="display: block;">Kurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="14" name="p4" value="14"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="14" style="display: block;">Sama saja seperti biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="15" name="p4" value="15"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="15" style="display: block;">Iya, lebih dari biasanya</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Pertanyaan 5 --}}
                    <span class="mb-3 text-gray-800">Bisa menikmati kegiatan atau pekerjaan sehari-harimu?</span>
                    <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                        <div class="container text-center text-white">
                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <input type="radio" id="16" name="p5" value="16"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="16" style="display: block;">Sangat berkurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="17" name="p5" value="17"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="17" style="display: block;">Kurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="18" name="p5" value="18"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="18" style="display: block;">Sama saja seperti biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="19" name="p5" value="19"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="19" style="display: block;">Iya, lebih dari biasanya</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Pertanyaan 6 --}}
                    <span class="mb-3 text-gray-800">Merasa tenang dan damai?</span>
                    <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                        <div class="container text-center text-white">
                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <input type="radio" id="20" name="p6" value="20"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="20" style="display: block;">Sangat berkurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="21" name="p6" value="21"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="21" style="display: block;">Kurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="22" name="p6" value="22"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="22" style="display: block;">Sama saja seperti biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="23" name="p6" value="23"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="23" style="display: block;">Iya, lebih dari biasanya</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Pertanyaan 7 --}}
                    <span class="mb-3 text-gray-800">Susah tidur karena khawatir?</span>
                    <div class="card-body bg-info rounded mt-2 shadow-sm p-3 mb-5">
                        <div class="container text-center text-white">
                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <input type="radio" id="24" name="p7" value="24"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="24" style="display: block;">Sangat berkurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="25" name="p7" value="25"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="25" style="display: block;">Kurang dari biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="26" name="p7" value="26"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="26" style="display: block;">Sama saja seperti biasanya</label>
                                </div>
                                <div class="col-sm">
                                    <input type="radio" id="27" name="p7" value="27"
                                        style="transform: scale(1.5); margin: 0.5px;">
                                    <label for="27" style="display: block;">Iya, lebih dari biasanya</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- button submit --}}
                    <div class="d-grid gap-2 text-center">
                        <button id="kirimButton" class="btn btn-warning" type="button"
                            style="display: block; width: 50%; border-radius:20px; margin: auto;">Kirim</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        // Menambahkan event listener untuk tombol "Kirim"
        document.getElementById('kirimButton').addEventListener('click', function() {
            // Mengarahkan pengguna ke halaman hasil-q
            window.location.href = '/hasil-m';
        });

        // Menambahkan event listener untuk tombol "Back"
        document.getElementById('backButton').addEventListener('click', function() {
            window.location.href = '/tes-m';
        });
    </script>


@endsection
