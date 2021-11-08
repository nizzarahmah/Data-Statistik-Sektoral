@extends('layouts_admin.app')
@section('title','Data User')
@section('content')
<!--Data Tables -->
<link href="{{ asset('assets/template_admin')}}/assets/plugins/datatable/css/dataTables.bootstrap4.min.css"
    rel="stylesheet" type="text/css">
<link href="{{ asset('assets/template_admin')}}/assets/plugins/datatable/css/buttons.bootstrap4.min.css"
    rel="stylesheet" type="text/css">

<div class="page-content-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
            <div class="breadcrumb-title pr-3">Data User</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url()->previous()}}"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data User</li>
                    </ol>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="btn-group">
                    <a href="{{ route('users.create')}}" class="btn btn-facebook">Tambah Data User</a>

                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        @include('admin.partials.alert')
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0">Data User</h4>
                </div>
                <hr />
                <div class="table-responsive">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Tgl di Buat</th>
                                <th>Tgl di Ubah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $users as $index => $user )


                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->username}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->created_at->format("d F, Y - h:i:s") }}</td>
                                <td>{{ $user->updated_at->format("d F, Y - h:i:s") }}</td>
                                <td>

                                    <a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-twitter"><i
                                            class="bx bx-edit-alt"></i></a>
                                    <form action="{{ route('users.destroy',[$user->id]) }}" method="post"
                                        class="d-inline-block" onsubmit="return confirm('Delete?')">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-youtube"><i
                                                class="bx bx-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
