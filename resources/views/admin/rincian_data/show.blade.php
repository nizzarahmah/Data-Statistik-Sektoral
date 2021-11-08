@extends('layouts_admin.app')
@section('title','Detail Rincian Data')
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
            <div class="breadcrumb-title pr-3">Detail Rincian Data</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url()->previous()}}"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Rincian Data</li>
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
                            <h4 class="mb-0">Detail Rincian Data</h4>
                        </div>
                        <hr />
                        <table class="table table-borderless table-hover">
                            <tr>
                                <th>Kode Referensi</th>
                                <th>:</th>
                                <td>{{ $rincian_data->kode_referensi }}</td>
                            </tr>
                            <tr>
                                <th>Nama File</th>
                                <th>:</th>
                                <td>{{ $rincian_data->nama_file }}</td>
                            </tr>
                            <tr>
                                <th>Bidang Urusan Pemerintahan</th>
                                <th>:</th>
                                <td>{{ $rincian_data->nama_bidang }}</td>
                            </tr>
                            <tr>
                                <th>Pemerintahan Daerah Pengampu</th>
                                <th>:</th>
                                <td>{{ $rincian_data->nama_opd }}</td>
                            </tr>
                            <tr>
                                <th>Tahun Rilis</th>
                                <th>:</th>
                                <td>{{ $rincian_data->tahun_rilis }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>:</th>
                                <td>{{ $rincian_data->status }}</td>
                            </tr>
                            <tr>
                                <th>Ketersediaan Metadata</th>
                                <th>:</th>
                                <td>{{ $rincian_data->ketersediaan_metadata }}</td>
                            </tr>
                            <tr>
                                <th>Klasifikasi Data</th>
                                <th>:</th>
                                <td>{{ $rincian_data->klasifikasi_data }}</td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <th>:</th>
                                <td>{{ $rincian_data->keterangan }}</td>
                            </tr>
                            <tr>
                                <th>Dibuat Oleh</th>
                                <th>:</th>
                                <td>
                                    <?php if($rincian_data->dibuat_oleh == null){ ?>
                                    {{ "-" }}
                                    <?php }else{ ?>
                                    {{ $rincian_data->dibuat_oleh}}
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal di Buat</th>
                                <th>:</th>
                                <td>
                                    <?php if($rincian_data->tanggal_dibuat == null){
                                        echo "-";
                                    }else{ ?>
                                    {{ date('d F, Y', strtotime($rincian_data->tanggal_dibuat)) }}
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Diubah Oleh</th>
                                <th>:</th>
                                <td>
                                    <?php if($rincian_data->diubah_oleh == null){ ?>
                                    {{ "-" }}
                                    <?php }else{ ?>
                                    {{ $rincian_data->diubah_oleh}}
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal di Ubah</th>
                                <th>:</th>
                                <td>
                                    <?php if($rincian_data->tanggal_diubah == null){
                                        echo "-";
                                    }else{ ?>
                                    {{ date('d F, Y', strtotime($rincian_data->tanggal_diubah)) }}
                                    <?php } ?>
                                </td>
                            </tr>

                        </table>
                        <a href="{{ url('admin/download/'.$rincian_data->upload_file) }}"
                            class="btn btn-info btn-block"><i class="bx bx-download"></i> Download File</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
