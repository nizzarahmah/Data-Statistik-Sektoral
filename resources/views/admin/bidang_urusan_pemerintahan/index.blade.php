@extends('layouts_admin.app')
@section('title','Data Bidang Urusan Pemerintahan')
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
            <div class="breadcrumb-title pr-3">Data Bidang Urusan Pemerintahan</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url()->previous()}}"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Bidang Urusan Pemerintahan</li>
                    </ol>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="btn-group">
                    <a href="{{ route('bidang_urusan_pemerintahan.create')}}" class="btn btn-facebook">Tambah Data
                        Bidang Urusan Pemerintahan</a>

                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        @include('admin.partials.alert')
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0">Data Bidang Urusan Pemerintahan</h4>
                </div>
                <hr />
                <div class="table-responsive">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama OPD</th>
                                <th>Nama Bidang</th>
                                <th>Dibuat Oleh</th>
                                <th>Diubah Oleh</th>
                                <th>Tgl Dibuat</th>
                                <th>Tgl Diubah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $bidang_urusan_pemerintahan as $index => $bup )


                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $bup->nama_opd}}</td>
                                <td>{{ $bup->nama_bidang}}</td>
                                <td>{{ $bup->dibuat_oleh}}</td>
                                <td>
                                    <?php if($bup->diubah_oleh == null){ ?>
                                    {{ "-" }}
                                    <?php }else{ ?>
                                    {{ $bup->diubah_oleh}}
                                    <?php } ?>
                                </td>
                                <td><?php if($bup->tanggal_dibuat == null){
                                    echo "-";
                                }else{ ?>
                                    {{ date('d F, Y', strtotime($bup->tanggal_dibuat)) }}
                                    <?php } ?>
                                </td>
                                <td><?php if($bup->tanggal_diubah == null){
                                    echo "-";
                                }else{ ?>
                                    {{ date('d F, Y', strtotime($bup->tanggal_diubah)) }}
                                    <?php } ?>
                                </td>
                                <td>

                                    <a href="{{ route('bidang_urusan_pemerintahan.edit',[$bup->id]) }}"
                                        class="btn btn-twitter"><i class="bx bx-edit-alt"></i></a>
                                    <form action="{{ route('bidang_urusan_pemerintahan.destroy',[$bup->id]) }}"
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
