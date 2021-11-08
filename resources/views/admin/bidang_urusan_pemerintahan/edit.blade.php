@extends('layouts_admin.app')
@section('title','Edit Bidang Urusan Pemerintahan')
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
            <div class="breadcrumb-title pr-3">Edit Bidang Urusan Pemerintahan</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url()->previous()}}"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Bidang Urusan Pemerintahan</li>
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
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">Tambah Bidang Urusan Pemerintahan</h4>
                        </div>
                        <hr />
                        <form
                            action="{{ route('bidang_urusan_pemerintahan.update',[$bidang_urusan_pemerintahan->id]) }}"
                            method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nama Bidang </label>
                                <input type="hidden" name="id" value="{{ $bidang_urusan_pemerintahan->id }}">
                                <input type="text" name="nama_bidang"
                                    class="form-control @error('nama_bidang') is-invalid @enderror"
                                    value="{{ $bidang_urusan_pemerintahan->nama_bidang }}">
                                @error('nama_bidang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Nama OPD</label>
                                <select name="id_opd" required class="form-control ">
                                    <option value="{{ $bidang_urusan_pemerintahan->id_opd }}">
                                        {{ $bidang_urusan_pemerintahan->nama_opd }}</option>
                                    @foreach ($pemerintahan_daerah_pengampu as $opd )

                                    <option value="{{ $opd->id }}">{{ $opd->nama_opd }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group mb-0">
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
