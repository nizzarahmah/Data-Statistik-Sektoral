@extends('layouts_otentikasi.app')
@section('title','Login Page')
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
                                    <img src="{{asset('assets/template_admin')}}/assets/images/logo-icon.png" width="80"
                                        alt="">
                                    <h3 class="mt-4 font-weight-bold">Welcome Back</h3>
                                </div>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    @include('admin.partials.alert')
                                    <div class="form-group mt-4">
                                        <label>Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            name="username" value="{{ old('username') }}"
                                            placeholder="Enter your username" />
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="current-password" placeholder="Enter your password" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-row">

                                        <div class="form-group col text-right"> <a
                                                href="{{ route('password.request') }}"><i
                                                    class='bx bxs-key mr-2'></i>Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mt-3 w-100">
                                        <button type="submit" class="btn btn-primary btn-block">Log In</button>

                                    </div>
                                </form>
                                <hr>

                                <div class="text-center">
                                    <p class="mb-0">Don't have an account? <a href="{{ route('register')}}">Sign
                                            up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('assets/template_admin')}}/assets/images/login-images/login-frent-img.jpg"
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
