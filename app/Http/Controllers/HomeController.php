<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jamaah;
use App\Models\Berkas;
use App\Models\Jadwal;
use App\Models\Transaksi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('ux.home');
    }

       /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function adminHome()
    {
        $dataJemaah = Jamaah::all()->count();
        $dataAdmin = User::all()->count();
        $dataBerkas = Berkas::all()->count();
        $dataTransaksi = Transaksi::all()->count();
        $dataJadwal = Jadwal::all()->count();

        return view('admin.adminHome')
            ->with('dataJemaah', $dataJemaah)
            ->with('dataAdmin', $dataAdmin)
            ->with('dataBerkas', $dataBerkas)
            ->with('dataTransaksi', $dataTransaksi)
            ->with('dataJadwal', $dataJadwal);
    }
}
