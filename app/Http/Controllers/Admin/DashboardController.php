<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $countUser = DB::table('users')->count();
        $countPDP = DB::table('pemerintahan_daerah_pengampu')->count();
        $countBUP = DB::table('bidang_urusan_pemerintahan')->count();
        $countRD = DB::table('file_manajemen')->count();

        return view('admin.dashboard.index', compact([
            'countUser',
            'countPDP',
            'countBUP',
            'countRD'
        ]));
    }
}
