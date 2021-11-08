@extends('layouts_admin.app')
@section('title','Edit Data User')
@section('content')


<div class="page-content-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
            <div class="breadcrumb-title pr-3">Edit Data User</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url()->previous()}}"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Data User</li>
                    </ol>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="btn-group">
                    <a href="{{ url()->previous() }}" class="btn btn-youtube"><i class="bx bx-rewind-circle"></i>
                        Kembali</a>

                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card border-lg-top-primary radius-15">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class='bx bxs-user mr-1 font-24 text-primary'></i>
                            </div>
                            <h4 class="mb-0 text-primary">Edit Data User</h4>
                        </div>
                        <hr />
                        <form action="{{ route('users.update',[$users->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> <span
                                                class="input-group-text bg-transparent"><i
                                                    class='bx bx-user-circle'></i></span>
                                        </div>
                                        <input type="text" name="username"
                                            class="form-control border-left-0 @error('username') is-invalid @enderror"
                                            readonly value="{{ $users->username }}">
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> <span
                                                class="input-group-text bg-transparent"><i
                                                    class='bx bx-user'></i></span>
                                        </div>
                                        <input type="hidden" name="id" value="{{ $users->id }}">
                                        <input type="text" name="name"
                                            class="form-control border-left-0 @error('name') is-invalid @enderror"
                                            placeholder="Full Name" value="{{ $users->name }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> <span
                                                class="input-group-text bg-transparent"><i
                                                    class='bx bx-envelope'></i></span>
                                        </div>
                                        <input type="text" name="email"
                                            class="form-control border-left-0 @error('email') is-invalid @enderror"
                                            placeholder="Email Address" value="{{ $users->email }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> <span
                                                class="input-group-text bg-transparent"><i
                                                    class='bx bx-envelope'></i></span>
                                        </div>
                                        <input type="password" name="password"
                                            class="form-control border-left-0 @error('password') is-invalid @enderror"
                                            placeholder="Password" value="{{ old($users->password) }}">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                    </div> --}}

                    <button type="submit" class="btn btn-primary btn-block px-5">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
