@extends('layouts_admin.app')
@section('title','Dashboard Admin')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="card radius-15 bg-voilet">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="mb-0 text-white">{{ $countUser }}
                                </h2>
                            </div>
                            <div class="ml-auto font-35 text-white"><i class="bx bx-user-circle"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="{{ url('admin/users') }}">
                                    <p class="mb-0 text-white">Data User</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card radius-15 bg-primary-blue">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="mb-0 text-white">{{ $countPDP }}
                                </h2>
                            </div>
                            <div class="ml-auto font-35 text-white"><i class="bx bx-building-house"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="{{ url('admin/pemerintahan_daerah_pengampu') }}">
                                    <p class="mb-0 text-white">Pemerintahan Daerah Pengampu</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card radius-15 bg-rose">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="mb-0 text-white">{{ $countBUP }}
                                </h2>
                            </div>
                            <div class="ml-auto font-35 text-white"><i class="bx bx-bookmarks"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="{{ url('admin/bidang_urusan_pemerintahan') }}">
                                    <p class="mb-0 text-white">Bidang Urusan Pemerintahan</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card radius-15 bg-sunset">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="mb-0 text-white">{{ $countRD }}
                                </h2>
                            </div>
                            <div class="ml-auto font-35 text-white"><i class="bx bx-data"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="{{ url('admin/rincian_data') }}">
                                    <p class="mb-0 text-white">Rincian Data</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <!--end row-->

        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="card radius-15">
                    <div class="card-body">
                        <div id="chart8"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="card radius-15">
                    <div class="card-body">
                        <div id="chart7"></div>
                    </div>
                </div>
            </div>

        </div>
        <!--end row-->
        <div class="card radius-15">

            <div class="card-body">
                <div id="chart5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card radius-15">
                    <div class="card-body">
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card radius-15">
                    <div class="card-body">
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card radius-15">
                    <div class="card-body">
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card radius-15">
                    <div class="card-body">
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card radius-15">
                    <div class="card-body">
                        <div id="chart6"></div>
                    </div>
                </div>
            </div>
        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
