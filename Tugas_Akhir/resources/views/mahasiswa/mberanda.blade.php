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
<div class="card mb-3">
    <img src="img/dashboard.jpg" class="card-img-top" alt="dashboard" style="width: auto; height: 100%;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
</div>



@endsection
