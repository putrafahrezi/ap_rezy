<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataObat;
use App\Models\StokObat;
use App\Models\Suplier;

class DataObatController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $do = DataObat::all();
        return view('dataobat.index',compact('nomor','do'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sto = StokObat::all();
        $sp  = Suplier::all();
        return view('dataobat.form',compact('sto','sp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $do = new DataObat;
      
        $do->stokobats_id= $request->namaobat;
        $do->tanggal = $request->tanggal;
        $do->jumlah = $request->jumlah;
        $do->jenis_obt = $request->jenis_obt;
        $do->suppliers_id = $request->splr;
        $do->ed = $request->ed;
        $do->keterangan = $request->keterangan;
        $do->save();


        return redirect('/dataobat/');
    }

    public function edit(string $id)
    {
        $do = DataObat::find($id);
        $sto = StokObat::all();
        $sp = Suplier::all();
        return view('dataobat.edit', compact('do', 'sto', 'sp'));
    }

    public function update(Request $request, string $id)
    {
        $do = DataObat::find($id);
        $do->stokobats_id= $request->namaobat;
        $do->tanggal = $request->tanggal;
        $do->jumlah = $request->jumlah;
        $do->jenis_obt = $request->jenis_obt;
        $do->supliers_id = $request->splr;
        $do->ed = $request->ed;
        $do->keterangan = $request->keterangan;
        $do->save();


        return redirect('/dataobat/');
    }


    public function destroy(string $id)
    {
        $do = DataObat::find($id);
        $do->delete();
        return redirect('/dataobat/');
    }
}
