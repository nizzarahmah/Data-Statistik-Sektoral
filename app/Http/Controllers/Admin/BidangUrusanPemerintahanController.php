<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BidangUrusanPemerintahan;
use App\Models\PemerintahanDaerahPengampu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BidangUrusanPemerintahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidang_urusan_pemerintahan = DB::table('bidang_urusan_pemerintahan')
            ->join(
                'pemerintahan_daerah_pengampu',
                'bidang_urusan_pemerintahan.id_opd',
                '=',
                'pemerintahan_daerah_pengampu.id'
            )
            ->select('bidang_urusan_pemerintahan.*', 'pemerintahan_daerah_pengampu.nama_opd')
            ->get();
        return view('admin.bidang_urusan_pemerintahan.index', compact('bidang_urusan_pemerintahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemerintahan_daerah_pengampu = PemerintahanDaerahPengampu::get();
        return view('admin.bidang_urusan_pemerintahan.create', compact('pemerintahan_daerah_pengampu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bidang_urusan_pemerintahan = $request->validate([
            'nama_bidang'    => 'required',
            'id_opd'         => 'required',
        ]);
        $bidang_urusan_pemerintahan['dibuat_oleh'] = Auth::user()->name;
        $bidang_urusan_pemerintahan['tanggal_dibuat'] = date('Y-m-d H:i:s');

        BidangUrusanPemerintahan::create($bidang_urusan_pemerintahan);
        return redirect('admin/bidang_urusan_pemerintahan')->with('success', 'Data Bidang Urusan Pemerintahan Berhasil di Tambahkan');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidang_urusan_pemerintahan = DB::table('bidang_urusan_pemerintahan')
            ->join(
                'pemerintahan_daerah_pengampu',
                'bidang_urusan_pemerintahan.id_opd',
                '=',
                'pemerintahan_daerah_pengampu.id'
            )
            ->select('bidang_urusan_pemerintahan.*', 'pemerintahan_daerah_pengampu.nama_opd')
            ->where('bidang_urusan_pemerintahan.id', $id)
            ->first();
        $pemerintahan_daerah_pengampu = PemerintahanDaerahPengampu::get();
        return view('admin.bidang_urusan_pemerintahan.edit', compact('bidang_urusan_pemerintahan', 'pemerintahan_daerah_pengampu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        BidangUrusanPemerintahan::where('id', $request->id)->update([
            'nama_bidang' => $request->nama_bidang,
            'id_opd' => $request->id_opd,
            'diubah_oleh' => Auth::user()->name,
            'tanggal_diubah'     => date('Y-m-d H:i:s'),
        ]);

        return redirect('admin/bidang_urusan_pemerintahan')->with('success', 'Data Pemerintahan Daerah Pengampu Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BidangUrusanPemerintahan::where('id', $id)->delete();
        return redirect('admin/bidang_urusan_pemerintahan')->with('delete', 'Data Bidang Urusan Pemerintahan Berhasil di Delete!');
    }
}
