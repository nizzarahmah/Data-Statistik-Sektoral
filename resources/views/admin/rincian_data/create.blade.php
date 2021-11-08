@extends('layouts_admin.app')
@section('title','Tambah Rincian Data')
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
            <div class="breadcrumb-title pr-3">Tambah Rincian Data</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url()->previous()}}"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Rincian Data</li>
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
                            <h4 class="mb-0">Tambah Rincian Data</h4>
                        </div>
                        <hr />
                        <form action="{{ route('rincian_data.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Kode Referensi</label>
                                <input type="text" name="kode_referensi"
                                    class="form-control @error('kode_referensi') is-invalid @enderror"
                                    placeholder="Kode Referensi">
                                @error('kode_referensi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama File</label>
                                <input type="text" name="nama_file"
                                    class="form-control @error('nama_file') is-invalid @enderror"
                                    placeholder="Nama File">
                                @error('nama_file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Bidang Urusan Pemerintahan</label>
                                <select name="bidang_urusan_pemerintahan_id" required class="form-control ">
                                    <option value="">-- Pilih Bidang Urusan Pemerintahan --</option>
                                    @foreach ($bidang_urusan_pemerintahan as $bup )

                                    <option value="{{ $bup->id }}">{{ $bup->nama_bidang }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Pemerintahan Daerah Pengampu</label>
                                <select name="pd_pengampu_id" required class="form-control ">
                                    <option value="">-- Pilih Pemerintahan Daerah Pengampu --</option>
                                    @foreach ($pd_pengampu as $pd )

                                    <option value="{{ $pd->id }}">{{ $pd->nama_opd }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Rilis</label>
                                <input type="number" min="1900" max="2100" step="1" name="tahun_rilis"
                                    class="form-control @error('tahun_rilis') is-invalid @enderror"
                                    placeholder="Tahun Rilis (maksimal 4 number)">
                                @error('tahun_rilis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" name="status"
                                    class="form-control @error('status') is-invalid @enderror" placeholder="Status">
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Ketersediaan Metadata</label>
                                <select name="ketersediaan_metadata" required class="form-control">
                                    <option>-- Pilih Ketersediaan Metadata --</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Klasifikasi Data</label>
                                <select name="klasifikasi_data" required class="form-control">
                                    <option>-- Pilih Klasifikasi Data --</option>
                                    <option value="Rahasia">Rahasia</option>
                                    <option value="Terbuka">Terbuka</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label>Upload File</label>
                                <input type="file" class="form-control" name="upload_file" id="gambar">
                            </div>

                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea name="keterangan"
                                    class="form-control @error('keterangan') is-invalid @enderror" rows="3"></textarea>

                                @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary btn-block px-5">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
