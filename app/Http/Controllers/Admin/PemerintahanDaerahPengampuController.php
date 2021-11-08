<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PemerintahanDaerahPengampu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemerintahanDaerahPengampuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemerintahan_daerah_pengampu = PemerintahanDaerahPengampu::orderBy('id', 'desc')->get();
        return view('admin.pemerintahan_daerah_pengampu.index', compact('pemerintahan_daerah_pengampu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pemerintahan_daerah_pengampu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemerintahan_daerah_pengampu = $request->validate([
            'nama_opd' => 'required',
        ]);
        $pemerintahan_daerah_pengampu['dibuat_oleh'] = Auth::user()->name;
        $pemerintahan_daerah_pengampu['tanggal_dibuat'] = date('Y-m-d H:i:s');

        PemerintahanDaerahPengampu::create($pemerintahan_daerah_pengampu);
        return redirect('admin/pemerintahan_daerah_pengampu')->with('success', 'Data Pemerintahan Daerah Pengampu Berhasil di Tambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemerintahan_daerah_pengampu = PemerintahanDaerahPengampu::find($id);
        return view('admin.pemerintahan_daerah_pengampu.edit', compact('pemerintahan_daerah_pengampu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        PemerintahanDaerahPengampu::where('id', $request->id)->update([
            'nama_opd' => $request->nama_opd,
            'diubah_oleh' => Auth::user()->name,
            'tanggal_diubah'     => date('Y-m-d H:i:s'),
        ]);

        return redirect('admin/pemerintahan_daerah_pengampu')->with('success', 'Data Pemerintahan Daerah Pengampu Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PemerintahanDaerahPengampu::where('id', $id)->delete();
        return redirect('admin/pemerintahan_daerah_pengampu')->with('delete', 'Data Pemerintahan Daerah Pengampu Berhasil di Delete!');
    }
}
