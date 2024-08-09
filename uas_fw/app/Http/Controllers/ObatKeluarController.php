<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ObatKeluar;
use App\Models\StokObat;

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
        $sto = StokObat::all();
        return view('obatkeluar.form',compact('ok','sto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ok = new ObatKeluar;
        $ok->stokobats_id = $request->namaobat;
        $ok->tanggal = $request->tanggal;
        $ok->jumlah = $request->jumlah;
        $ok->jenis_obt = $request->jenis_obt;
        $ok->ed = $request->ed;
        $ok->keterangan = $request->keterangan;
        $ok->save();


        return redirect('/obatkeluar/');
    }

    public function edit(string $id)
    {
        $ok = ObatKeluar::find($id);
        $sto = StokObat::all();
        return view('obatkeluar.edit', compact('ok', 'sto'));
    }

    public function update(Request $request, string $id)
    {
        $ok = ObatKeluar::find($id);
        $ok->stokobats_id = $request->namaobat;
        $ok->tanggal = $request->tanggal;
        $ok->jumlah = $request->jumlah;
        $ok->jenis_obt = $request->jenis_obt;
        $ok->ed = $request->ed;
        $ok->keterangan = $request->keterangan;
        $ok->save();


        return redirect('/obatkeluar/');
    }


    public function destroy(string $id)
    {
        $ok = ObatKeluar::find($id);
        $ok->delete();
        return redirect('/obatkeluar/');
    }

}
