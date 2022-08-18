<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();

        return view('admin.transaksi.index',[
            'transaksi' => $transaksi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transaksi.create');
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
            'tgl_transaksi' => 'required',
            'nama_lengkap' => 'required',
            'debet' => 'required',
            'keterangan' => 'required'
        ]);
        $array = $request->only([
            'tgl_transaksi', 'nama_lengkap', 'debet','keterangan'
        ]);
        $transaksi = Transaksi::create($array);
        return redirect()->route('transaksi.index')
            ->with(['success' => 'Berhasil menambah Data transaksi baru']);
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
        $transaksi = Transaksi::find($id);
        if (!$transaksi) return redirect()->route('transaksi.index')
            ->with(['error' => 'Data dengan id' . $id . ' tidak ditemukan']);
        return view('admin.transaksi.edit', [
            'transaksi' => $transaksi
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
            'tgl_transaksi' => 'required',
            'nama_lengkap' => 'required',
            'debet' => 'required',
            'keterangan' => 'required'
    ]);
        $transaksi = Transaksi::find($id);
        $transaksi->tgl_transaksi = $request->tgl_transaksi;
        $transaksi->nama_lengkap = $request->nama_lengkap;
        $transaksi->debet = $request->debet;
        $transaksi->keterangan = $request->keterangan;
        $transaksi->save();
        return redirect()->route('transaksi.index')
            ->with(['success' => 'Data Berhasil Diedit!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request, $id)
    {
        $transaksi = Transaksi::where('id', $id)
        ->delete();

        return redirect()->route('transaksi.index')
        ->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
