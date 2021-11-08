<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="{{ asset('assets/template_admin')}}/assets/images/logo-icon.png" class="logo-icon-2" alt="" />
        </div>
        <div>
            <h4 class="logo-text">Statistik</h4>
        </div>
        <a href="{{ url('admin/dashboard')}}" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('admin/dashboard')}}">
                <div class="parent-icon icon-color-4"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-12"><i class="bx bx-folder"></i>
                </div>
                <div class="menu-title">Manajemen Data</div>
            </a>
            <ul>
                <li> <a href="{{ url('admin/users')}}"><i class="bx bx-right-arrow-alt"></i>User</a>
                </li>
                <li> <a href="{{ url('admin/pemerintahan_daerah_pengampu')}}"><i
                            class="bx bx-right-arrow-alt"></i>Pemerintah Daerah
                        Pengampu</a>
                </li>
                <li> <a href="{{ url('admin/bidang_urusan_pemerintahan')}}"><i class="bx bx-right-arrow-alt"></i>Bidang
                        Urusan
                        Pemerintahan</a>
                </li>

            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-7"><i class="bx bx-file"></i>
                </div>
                <div class="menu-title">Summary</div>
            </a>
            <ul>
                <li> <a href="{{ route('rincian_data.create')}}"><i class="bx bx-right-arrow-alt"></i>Tambah Data</a>
                </li>
                <li> <a href="{{ url('admin/rincian_data')}}"><i class="bx bx-right-arrow-alt"></i>Rincian
                        Data</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="{{ url('admin/dashboard')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <div class="parent-icon icon-color-1"><i class="bx bx-log-out"></i>
                </div>
                <div class="menu-title">Logout</div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>

        </li>
    </ul>
    <!--end navigation-->
</div>
