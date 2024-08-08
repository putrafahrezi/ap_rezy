<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;

class SuplierController extends Controller
{
    
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $sp = Suplier::all();
        return view('suplier.index',compact('nomor','sp'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sp = Suplier::all();
        return view('suplier.form',compact('sp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sp = new Suplier;
        $sp->kdsuplier = $request->kdsuplier;
        $sp->namasuplier = $request->namasuplier;
        $sp->hp = $request->hp;
        $sp->alamat = $request->alamat;
        $sp->save();


        return redirect('/suplier/');
    }
}
