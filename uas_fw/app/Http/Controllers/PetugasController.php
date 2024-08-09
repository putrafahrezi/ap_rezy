<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class PetugasController extends Controller
{
    
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $ptg = Petugas::all();
        return view('petugas.index',compact('nomor','ptg'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ptg = Petugas::all();
        return view('petugas.form',compact('ptg'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ptg = new Petugas;
        $ptg->kdpetugas = $request->kdpetugas;
        $ptg->namapetugas = $request->namapetugas;
        $ptg->hp = $request->hp;
        $ptg->email = $request->email;
        $ptg->umur = $request->umur;
        $ptg->alamat = $request->alamat;
        $ptg->save();


        return redirect('/petugas/');
    }

    public function edit(string $id)
    {
        $ptg = Petugas::find($id);
        return view('petugas.edit', compact('ptg'));
    }

    public function update(Request $request, string $id)
    {
        $ptg = Petugas::find($id);
        $ptg->kdpetugas = $request->kdpetugas;
        $ptg->namapetugas = $request->namapetugas;
        $ptg->hp = $request->hp;
        $ptg->email = $request->email;
        $ptg->umur = $request->umur;
        $ptg->alamat = $request->alamat;
        $ptg->save();


        return redirect('/petugas/');
    }


    public function destroy(string $id)
    {
        $ptg = Petugas::find($id);
        $ptg->delete();
        return redirect('/petugas/');
    }


}
