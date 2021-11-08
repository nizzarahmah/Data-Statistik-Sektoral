<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RincianData;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RincianDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file_manajemen = DB::table('file_manajemen')
            ->join(
                'bidang_urusan_pemerintahan',
                'file_manajemen.bidang_urusan_pemerintahan_id',
                '=',
                'bidang_urusan_pemerintahan.id'
            )
            ->join(
                'pemerintahan_daerah_pengampu',
                'file_manajemen.pd_pengampu_id',
                '=',
                'pemerintahan_daerah_pengampu.id'
            )
            ->select('file_manajemen.*', 'bidang_urusan_pemerintahan.nama_bidang', 'pemerintahan_daerah_pengampu.nama_opd')
            ->get();
        return view('admin.rincian_data.index', compact('file_manajemen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidang_urusan_pemerintahan = DB::table('bidang_urusan_pemerintahan')->get();
        $pd_pengampu = DB::table('pemerintahan_daerah_pengampu')->get();
        return view('admin.rincian_data.create', compact('bidang_urusan_pemerintahan', 'pd_pengampu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = $request->upload_file->getClientOriginalName() . '-' . time() . '.' . $request->file('upload_file')->extension();
        $request->file('upload_file')->storeAs('public', $fileName);
        $rincian_data = $request->validate([
            'kode_referensi'                => 'required',
            'nama_file'                     => 'required|unique:file_manajemen',
            'bidang_urusan_pemerintahan_id' => 'required',
            'pd_pengampu_id'                => 'required',
            'tahun_rilis'                   => 'required|digits:4|integer|min:1900',
            'ketersediaan_metadata'         => 'required',
            'klasifikasi_data'              => 'required',
            'status'                        => 'required',
            'keterangan'                    => 'required'
        ]);
        $rincian_data['upload_file'] = $fileName;
        $rincian_data['dibuat_oleh'] = Auth::user()->name;
        $rincian_data['tanggal_dibuat'] = date('Y-m-d H:i:s');

        RincianData::create($rincian_data);
        return redirect('admin/rincian_data')->with('success', 'Rincian Data Berhasil di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rincian_data = DB::table('file_manajemen')
            ->join(
                'bidang_urusan_pemerintahan',
                'file_manajemen.bidang_urusan_pemerintahan_id',
                '=',
                'bidang_urusan_pemerintahan.id'
            )
            ->join(
                'pemerintahan_daerah_pengampu',
                'file_manajemen.pd_pengampu_id',
                '=',
                'pemerintahan_daerah_pengampu.id'
            )
            ->select('file_manajemen.*', 'bidang_urusan_pemerintahan.nama_bidang', 'pemerintahan_daerah_pengampu.nama_opd')
            ->where('file_manajemen.id', $id)
            ->first();
        return view('admin.rincian_data.show', compact('rincian_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rincian_data = DB::table('file_manajemen')
            ->join(
                'bidang_urusan_pemerintahan',
                'file_manajemen.bidang_urusan_pemerintahan_id',
                '=',
                'bidang_urusan_pemerintahan.id'
            )
            ->join(
                'pemerintahan_daerah_pengampu',
                'file_manajemen.pd_pengampu_id',
                '=',
                'pemerintahan_daerah_pengampu.id'
            )
            ->select('file_manajemen.*', 'bidang_urusan_pemerintahan.nama_bidang', 'pemerintahan_daerah_pengampu.nama_opd')
            ->where('file_manajemen.id', $id)
            ->first();
        $bidang_urusan_pemerintahan = DB::table('bidang_urusan_pemerintahan')->get();
        $pd_pengampu = DB::table('pemerintahan_daerah_pengampu')->get();
        return view('admin.rincian_data.edit', compact('bidang_urusan_pemerintahan', 'pd_pengampu', 'rincian_data'));
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
        $rincian_data = RincianData::whereId($id)->first();
        $fileName = $rincian_data->upload_file;
        if ($request->upload_file) {
            Storage::disk('public')->delete('storage/', $rincian_data);
            $fileName = $request->upload_file->getClientOriginalName() . '-' . time() . '.' . $request->file('upload_file')->extension();
            $request->file('upload_file')->storeAs('public', $fileName);
        }
        $rincian_data->update([
            'kode_referensi' => $request->kode_referensi,
            'nama_file' => $request->nama_file,
            'bidang_urusan_pemerintahan_id' => $request->bidang_urusan_pemerintahan_id,
            'pd_pengampu_id' => $request->pd_pengampu_id,
            'tahun_rilis' => $request->tahun_rilis,
            'status' => $request->status,
            'ketersediaan_metadata' => $request->ketersediaan_metadata,
            'klasifikasi_data' => $request->klasifikasi_data,
            'keterangan' => $request->keterangan,
            'upload_file' => $fileName,
            'diubah_oleh' => Auth::user()->name,
            'tanggal_diubah'     => date('Y-m-d H:i:s'),
        ]);
        return redirect('admin/rincian_data')->with('success', 'Rincian Data Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RincianData::where('id', $id)->delete();
        return redirect('admin/rincian_data')->with('delete', 'Rincian Data Berhasil di Delete!');
    }

    public function download($upload_file)
    {
        $file = Storage::disk('public')->get($upload_file);

        return (Response($file, 200))
            ->header('Content-Type', 'image/jpeg/pdf/csv');
    }
}
