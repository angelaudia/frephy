@extends('layout.master_acc')
@section('title', 'Login')
@section('content')
<div class="container">

   <!-- Outer Row -->
   <div class="row justify-content-center align-items-center">

       <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5 mx-auto">
               <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                      <div class="col-lg-6 ">
                          <div class="p-5">
                              <div class="text-center">
                                 <h1 class="h4 text-gray-900">Welcome Back!</h1>
                                 <p class="small text-gray-500">
                                    Your mental health is just as important as your physical health
                                </p>
                              </div>
                              <form class="user mt-2">
                                 <div class="form-group">
                                     <input type="email" class="form-control form-control-user"
                                         id="exampleInputEmail" aria-describedby="emailHelp"
                                         placeholder="Enter Email Address...">
                                 </div>
                                 <div class="form-group">
                                     <input type="password" class="form-control form-control-user"
                                         id="exampleInputPassword" placeholder="Password">
                                 </div>
                                 <div class="form-group">
                                     <div class="custom-control custom-checkbox small">
                                         <input type="checkbox" class="custom-control-input" id="customCheck">
                                         <label class="custom-control-label" for="customCheck">Remember
                                             Me</label>
                                     </div>
                                 </div>
                                 <a href="/beranda-m" class="btn btn-warning btn-user btn-block">
                                     Login
                                 </a>
                                 <hr>
                              </form>
                              <div class="text-center">
                                <span class="small">Don't Have an Account?</span>
                                 <a class="small" href="/register">Create an Account!</a>
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
