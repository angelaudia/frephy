@extends('layout.master_acc')
@section('title', 'Register')
@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama"
                                    placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_telp"
                                    placeholder="No. Handphone">
                            </div>
                            <div class="form-group">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle btn-user btn-block" type="button" id="roleDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Log In Sebagai
                                    </button>
                                    <div class="dropdown-menu w-100" aria-labelledby="roleDropdown">
                                        <a class="dropdown-item" href="#" data-value="0">Mahasiswa</a>
                                        <a class="dropdown-item" href="#" data-value="1">Konselor</a>
                                    </div>
                                    <input type="hidden" id="role" name="role">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        id="pw" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="pwconfirm" placeholder="Repeat Password">
                                </div>
                            </div>
                            <a href="/login" class="btn btn-warning btn-user btn-block">
                                Register Account
                            </a>
                            <hr>
                        </form>
                        <div class="text-center">
                            <span class="small">Already have an account?</span>
                            <a class="small" href="/login">Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-item').on('click', function () {
            var selectedValue = $(this).data('value');
            $('#role').val(selectedValue);
            $('#roleDropdown').text($(this).text());
        });
    });
</script>

@endsection

