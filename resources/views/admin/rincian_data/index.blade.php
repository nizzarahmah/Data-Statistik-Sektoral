@extends('layouts_admin.app')
@section('title','Rincian Data')
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
            <div class="breadcrumb-title pr-3">Rincian Data</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url()->previous()}}"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Rincian Data</li>
                    </ol>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="btn-group">
                    <a href="{{ route('rincian_data.create')}}" class="btn btn-facebook">Tambah Data
                    </a>

                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        @include('admin.partials.alert')
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0">Rincian Data</h4>
                </div>
                <hr />
                <div class="table-responsive">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Referensi</th>
                                <th>Nama File</th>
                                <th>Nama Bidang</th>
                                <th>Nama OPD</th>
                                <th>Status</th>
                                <th>Klarifikasi Data</th>
                                {{-- <th>Dibuat Oleh</th>
                                <th>Diubah Oleh</th>
                                <th>Tgl Dibuat</th>
                                <th>Tgl Diubah</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $file_manajemen as $index => $file )


                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $file->kode_referensi}}</td>
                                <td>{{ $file->nama_file}}</td>
                                <td>{{ $file->nama_bidang}}</td>
                                <td>{{ $file->nama_opd}}</td>
                                <td>{{ $file->status}}</td>
                                <td>{{ $file->klasifikasi_data}}</td>
                                {{-- <td>{{ $file->dibuat_oleh}}</td>
                                <td>
                                    <?php if($file->diubah_oleh == null){ ?>
                                    {{ "-" }}
                                    <?php }else{ ?>
                                    {{ $file->diubah_oleh}}
                                    <?php } ?>
                                </td>
                                <td><?php if($file->tanggal_dibuat == null){
                                    echo "-";
                                }else{ ?>
                                    {{ date('d F, Y', strtotime($file->tanggal_dibuat)) }}
                                    <?php } ?>
                                </td>
                                <td><?php if($file->tanggal_diubah == null){
                                    echo "-";
                                }else{ ?>
                                    {{ date('d F, Y', strtotime($file->tanggal_diubah)) }}
                                    <?php } ?>
                                </td> --}}
                                <td>
                                    <a href="{{ route('rincian_data.show',[$file->id]) }}" class="btn btn-info"><i
                                            class="bx bx-show"></i></a>
                                    <a href="{{ route('rincian_data.edit',[$file->id]) }}" class="btn btn-twitter"><i
                                            class="bx bx-edit-alt"></i></a>
                                    <form action="{{ route('rincian_data.destroy',[$file->id]) }}" method="post"
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
