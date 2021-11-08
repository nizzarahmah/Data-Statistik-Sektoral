@extends('layouts_admin.app')
@section('title','Data Pemerintahan Daerah Pengampu')
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
            <div class="breadcrumb-title pr-3">Data Pemerintahan Daerah Pengampu</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url()->previous()}}"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Pemerintahan Daerah Pengampu</li>
                    </ol>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="btn-group">
                    <a href="{{ route('pemerintahan_daerah_pengampu.create')}}" class="btn btn-facebook">Tambah Data
                        Pemerintahan Daerah
                        Pengampu</a>

                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        @include('admin.partials.alert')
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0">Data Pemerintahan Daerah Pengampu</h4>
                </div>
                <hr />
                <div class="table-responsive">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama OPD</th>
                                <th>Dibuat Oleh</th>
                                <th>Diubah Oleh</th>
                                <th>Tgl Dibuat</th>
                                <th>Tgl Diubah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $pemerintahan_daerah_pengampu as $index => $pdp )


                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $pdp->nama_opd}}</td>
                                <td>{{ $pdp->dibuat_oleh}}</td>
                                <td>
                                    <?php if($pdp->diubah_oleh == null){ ?>
                                    {{ "-" }}
                                    <?php }else{ ?>
                                    {{ $pdp->diubah_oleh}}
                                    <?php } ?>
                                </td>
                                <td><?php if($pdp->tanggal_dibuat == null){
                                    echo "-";
                                }else{ ?>
                                    {{ date('d F, Y', strtotime($pdp->tanggal_dibuat)) }}
                                    <?php } ?>
                                </td>
                                <td><?php if($pdp->tanggal_diubah == null){
                                    echo "-";
                                }else{ ?>
                                    {{ date('d F, Y', strtotime($pdp->tanggal_diubah)) }}
                                    <?php } ?>
                                </td>
                                <td>

                                    <a href="{{ route('pemerintahan_daerah_pengampu.edit',[$pdp->id]) }}"
                                        class="btn btn-twitter"><i class="bx bx-edit-alt"></i></a>
                                    <form action="{{ route('pemerintahan_daerah_pengampu.destroy',[$pdp->id]) }}"
                                        method="post" class="d-inline-block" onsubmit="return confirm('Delete?')">
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
