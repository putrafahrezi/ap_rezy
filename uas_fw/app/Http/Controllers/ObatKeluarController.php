<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ObatKeluar;

class ObatKeluarController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $ok = ObatKeluar::all();
        return view('obatkeluar.index',compact('nomor','ok'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ok = ObatKeluar::all();
        return view('obatkeluar.form',compact('ok'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ok = new ObatKeluar;
        $ok->kdobat = $request->kdobat;
        $ok->namaobat = $request->namaobat;
        $ok->jenis_obt = $request->jenis_obt;
        $ok->tgl_bayar = $request->tgl_bayar;
        $ok->jumlah = $request->jumlah;
        $ok->status = $request->status;
        $ok->save();


        return redirect('/obatkeluar/');
    }

}
