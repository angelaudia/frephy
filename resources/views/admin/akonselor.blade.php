@extends('layout.master-a')
@section('title', 'Riwayat Konsultasi')
@section('content')

    {{-- Page Heading --}}
    <h1 class="h3 mb-4 text-gray-800">Konselor</h1>

    <!-- Konten -->
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-warning mb-2">
            <i class="fa-solid fa-plus pr-2"></i>
            Tambah Akun
        </button>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Akun Konselor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th>ID</th>
                            <th>Nama Konselor</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Keahlian</th>
                            <th>Deskripsi</th>
                            <th>Tipe</th>
                            <th>Waktu</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Abelia Soraya</td>
                            <td>abel@email.com</td>
                            <td>12345</td>
                            <td>anxiety</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, iste?</td>
                            <td>Sebaya</td>
                            <td>08.00 WIB</td>
                            <td>img</td>
                            <td class="d-flex justify-content-between">
                                <button type="button" class="btn btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
