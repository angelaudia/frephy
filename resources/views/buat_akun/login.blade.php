@extends('layout.master_acc')
@section('title', 'Login')
@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-auto mx-auto" style="max-height: 80vh;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900">Selamat Datang!</h1>
                                    </div>
                                    @if (session()->has('error'))
                                        <div class="alert alert-danger col-lg-10 mx-auto col-lg-5" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    @if (session()->has('success'))
                                        <div class="alert alert-success col-lg-10 mx-auto col-lg-5" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <form action="{{ route('authenticate') }}" method="POST" class="user mt-2">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email"
                                                name="email" aria-describedby="emailHelp"
                                                placeholder="Masukkan Email Anda...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                name="password" placeholder="Masukkan Password Anda...">
                                        </div>
                                        <button class="btn btn-warning btn-user btn-block" type="submit">Login</button>

                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <span class="small">Belum Punya Akun?</span>
                                        <a class="small" href="/register">Daftar Sekarang!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
