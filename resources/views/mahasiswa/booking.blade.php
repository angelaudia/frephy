@extends('layout.master')
@section('title', 'Booking')
@section('content')

    <h1 class="h3 mb-4 text-gray-800">Jadwalkan Konsultasi</h1>

    <!-- Modal Booking -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5 text-dark" id="exampleModalLabel">Detail Psikolog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center text-dark">
                    <!-- ... (isi modal sebelumnya) ... -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="jadwalkan()">Jadwalkan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Form -->
    <form id="jadwalForm" action="/booking" method="post">
        <div class="form-group row">
            <label for="inputKonselor" class="col-sm-2 col-form-label">Konselor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="inputKonselor" id="inputKonselor"
                    placeholder="Nama Konselor">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTipe" class="col-sm-2 col-form-label">Tipe Konselor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="inputTipe" id="inputTipe" placeholder="Tipe Konselor">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputJenis" class="col-sm-2 col-form-label">Jenis Konsultasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="inputJenis" id="inputJenis" placeholder="Jenis Konsultasi">
            </div>
        </div>
        <div class="form-group row d-flex justify-content-between">
            <label for="inputWaktu" class="col-sm-2 col-form-label">Waktu</label>
            <div class="btn-group-vertical w-75" role="group" aria-label="Vertical radio toggle button group">
                <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="vbtn-radio1">08.00 WIB</label>
                <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="vbtn-radio2">09.00 WIB</label>
                <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="vbtn-radio3">10.00 WIB</label>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="button" class="btn btn-warning" onclick="jadwalkan()">Jadwalkan</button>
            </div>
        </div>
    </form>

    <script>
        function jadwalkan() {
            // Validasi formulir jika diperlukan
            var form = document.getElementById("jadwalForm");

            // Kirim data formulir menggunakan AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", form.action, true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);

                    if (response.success) {
                        // Tampilkan pesan berhasil di jadwalkan
                        alert("Berhasil di jadwalkan");

                        // Sembunyikan modal booking
                        $('#bookingModal').modal('hide');
                    } else {
                        // Tampilkan pesan gagal jadwalkan jika diperlukan
                        alert("Gagal di jadwalkan");
                    }
                }
            };

            // Kirim data formulir
            var formData = new FormData(form);
            xhr.send(new URLSearchParams(formData));
        }
    </script>

@endsection
