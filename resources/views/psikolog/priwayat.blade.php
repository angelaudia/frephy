@extends('layout.master-p')
@section('title', 'Riwayat Konsultasi')
@section('content')

    {{-- Page Heading --}}
    <h1 class="h3 mb-4 text-gray-800">Riwayat Konsultasi</h1>

    <!-- Konten -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Riwayat Konsultasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Abelia Soraya</td>
                            <td>08.00 WIB</td>
                            <td>Batal</td>
                            <td> <button type="button" class="btn btn-success">
                                <i class="fa-solid fa-eye"></i>
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
