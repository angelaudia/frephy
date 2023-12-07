@extends('layout.master')
@section('title', 'Tes Kesehatan Mental')
@section('content')

<div class="container-fluid">
    <button id="backButton" type="button" class="btn btn-outline-warning">
        <i class="fa-solid fa-arrow-left"></i>
    </button>
    <span class="h4 mt-3 pl-2 text-gray-800">Hasil Tes</span>
</div>

{{-- card-pertanyaan --}}
<div class="container-fluid">
    <div class="card mt-3">
        <div class="card-body">
          <h4 class="h4 mb-3 text-gray-800" align="center">Hasil Tes Anda</h4>
          <img src="" alt="">
          <h4 class="text-gray-800" align="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore suscipit blanditiis iusto.</h4>
          {{-- button submit --}}
          <div class="d-grid gap-2 text-center">
            <button class="btn btn-primary w-50 mb-2" type="button">Jadwalkan Konsulor Sekarang</button>
            <button id="kembali" class="btn btn-outline-primary w-50" type="button">Kembali ke Halaman Tes</button>
        </div>


        </div>
    </div>
</div>

<script>
     document.getElementById('kembali').addEventListener('click', function() {
        window.location.href = '/tes';
    });

    // Menambahkan event listener untuk tombol "Back"
    document.getElementById('backButton').addEventListener('click', function() {
        window.location.href = '/quiz';
    });

</script>


@endsection
