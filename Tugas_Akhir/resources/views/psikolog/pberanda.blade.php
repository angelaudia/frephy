@extends('layout.master')
@section('title', 'Beranda')
@section('content')

{{-- welcome --}}
<div class="card mb-3">
    <div class="card-body bg-success rounded text-white">
        <h1><b>Hi, Mahasiswa1</b></h1>
        <span>Bagaimana kabarmu hari ini?</span>
    </div>
</div>

{{-- content --}}
<div class="container-fluid">
    <div class="container">
        <div class="row">
          <div class="col-sm">
            <img src="img/mental.png" alt="mental" class="img-fluid">
          </div>
          <div class="col-sm">
            <h1>Ciptakan Keseimbangan: Jaga Kesehatan Mental Anda!</h1>
            <p>Dalam kesibukan sehari-hari, seringkali kita lupa untuk merawat kesehatan mental kita. Kesehatan mental yang baik adalah kunci untuk mencapai kehidupan yang seimbang dan memuaskan. Bergabunglah dalam perjalanan perawatan diri dengan menjaga kesehatan mental Anda. Isi quessionaire sederhana kami untuk mengevaluasi kesehatan mental Anda. Dengan langkah kecil ini, Anda dapat membuka pintu menuju kesehatan mental yang optimal dan membangun pondasi yang kokoh untuk kehidupan yang lebih bahagia. Mulailah hari ini, karena kesehatan mental adalah investasi berharga untuk masa depan Anda.</p>
            <button id="tes" type="button" class="btn btn-warning">Tes Kesehatan Mental</button>
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
