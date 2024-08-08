<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StokObat;
use App\Models\Petugas;

class StokObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $so = StokObat::all();
        return view('stokobat.index',compact('nomor','so'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $so = StokObat::all();
        $ptg = Petugas::all();
        return view('stokobat.form',compact('so','ptg'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $so = new StokObat;
      
        $so->namaobat = $request->namaobat;
        $so->jenis_obt = $request->jenis_obt;
        $so->stok = $request->stok;
        $so->petugas_id = $request->petugas;
        $so->keterangan = $request->keterangan;
        $so->save();


        return redirect('/stokobat/');
    }
}
