<?php

namespace App\Http\Controllers;
use App\Models\Berkas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berkas = Berkas::all();
        return view('admin.berkas.index', [
            'berkas' => $berkas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berkas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $nm = $request->kk;
        $nm = $request->akta_kelahiran;
        $nm = $request->ktp;
        $nm = $request->foto_a;
        $nm = $request->foto_b;
        $nm = $request->foto_c;
        $nm = $request->btl_norek;
        $nm = $request->btl_nominal;
        $nm = $request->domisili;

        $namaFile = $nm->getClientOriginalName();

            $dataUpload = new Berkas;
            $dataUpload -> nama_lengkap = $request -> nama_lengkap;
            $dataUpload -> kk = $namaFile;
            $dataUpload -> akta_kelahiran = $namaFile;
            $dataUpload -> ktp = $namaFile;
            $dataUpload -> foto_a = $namaFile;
            $dataUpload -> foto_b = $namaFile;
            $dataUpload -> foto_c = $namaFile;
            $dataUpload -> btl_norek = $namaFile;
            $dataUpload -> btl_nominal = $namaFile;
            $dataUpload -> domisili = $namaFile;

            $nm->move(public_path().'/img', $namaFile);
            $dataUpload->save();

        return redirect()->route('berkas.index')
            ->with(['success' => 'Berhasil Menambah Data']);
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
        $berkas = Berkas::find($id);
        if (!$berkas) return redirect()->route('berkas.index')
            ->with(['error' => 'Data dengan id' . $id . ' tidak ditemukan']);
        return view('admin.berkas.edit', [
            'berkas' => $berkas
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
        //dd($request->all());
        $nm = $request->kk;
        $nm = $request->akta_kelahiran;
        $nm = $request->ktp;
        $nm = $request->foto_a;
        $nm = $request->foto_b;
        $nm = $request->foto_c;
        $nm = $request->btl_norek;
        $nm = $request->btl_nominal;
        $nm = $request->domisili;

        $namaFile = $nm->getClientOriginalName();

            $dataUpload = Berkas::find($id);
            $dataUpload -> nama_lengkap = $request -> nama_lengkap;
            $dataUpload -> kk = $namaFile;
            $dataUpload -> akta_kelahiran = $namaFile;
            $dataUpload -> ktp = $namaFile;
            $dataUpload -> foto_a = $namaFile;
            $dataUpload -> foto_b = $namaFile;
            $dataUpload -> foto_c = $namaFile;
            $dataUpload -> btl_norek = $namaFile;
            $dataUpload -> btl_nominal = $namaFile;
            $dataUpload -> domisili = $namaFile;

            $nm->move(public_path().'/img', $namaFile);
            $dataUpload->save();

        return redirect()->route('berkas.index')
            ->with(['success' => 'Berhasil Mengupdate Data']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $berkas = Berkas::where('id', $id)
        ->delete();

        return redirect()->route('berkas.index')
        ->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
