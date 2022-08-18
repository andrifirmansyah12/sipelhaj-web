<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jamaah;
use Carbon\Carbon;

class JamaahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jamaah = Jamaah::all();

        return view('admin.jamaah.index',[
            'jamaah' => $jamaah
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jamaah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tgl_daftar' => 'required',
            'nama_lengkap' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'keterangan' => 'required'
        ]);
        $array = $request->only([
            'tgl_daftar', 'nama_lengkap', 'tgl_lahir','alamat','no_telp','keterangan'
        ]);
        $jamaah = Jamaah::create($array);
        return redirect()->route('jamaah.index')
            ->with(['success' => 'Berhasil menambah Data jamaah baru']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jamaah = Jamaah::find($id);
        if (!$jamaah) return redirect()->route('jamaah.index')
            ->with(['error' => 'Data dengan id' . $id . ' tidak ditemukan']);
        return view('admin.jamaah.edit', [
            'jamaah' => $jamaah
        ]);
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
        $request->validate([
            'tgl_daftar' => 'required',
            'nama_lengkap' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'keterangan' => 'required'
    ]);
        $jamaah = Jamaah::find($id);
        $jamaah->tgl_daftar = $request->tgl_daftar;
        $jamaah->nama_lengkap = $request->nama_lengkap;
        $jamaah->tgl_lahir = $request->tgl_lahir;
        $jamaah->alamat = $request->alamat;
        $jamaah->no_telp = $request->no_telp;
        $jamaah->keterangan = $request->keterangan;
        $jamaah->save();
        return redirect()->route('jamaah.index')
            ->with(['success' => 'Data Berhasil Diedit!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $jamaah = Jamaah::where('id', $id)
        ->delete();

        return redirect()->route('jamaah.index')
        ->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
