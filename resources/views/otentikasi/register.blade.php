@extends('layouts_otentikasi.app')
@section('title','Sign Up')
@section('content')
<div class="wrapper">
    <div class="section-authentication-login d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="card radius-15">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5">
                                <div class="text-center">
                                    <img src="{{asset('assets/template_admin')}}assets/images/logo-icon.png" width="80"
                                        alt="">
                                    <h3 class="mt-4 font-weight-bold">Create an Account</h3>
                                </div>

                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="form-group mt-4">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Full Name" name="name" />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email" name="email" />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Username</label>
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                placeholder="username" name="username" />
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password" name="password" autocomplete="new-password" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Confirm Password"
                                                name="password_confirmation" autocomplete="new-password" />

                                        </div>
                                    </div>



                                    <div class="btn-group mt-3 w-100">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>

                                    </div>
                                </form>
                                <hr />
                                <div class="text-center mt-4">
                                    <p class="mb-0">Already have an account? <a href="{{route('login')}}">Login</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('assets/template_admin')}}/assets/images/login-images/register-frent-img.jpg"
                                class="card-img login-img h-100" alt="...">
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
