<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataObat;

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
        $do = DataObat::all();
        return view('dataobat.form',compact('do'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $do = new DataObat;
        $do->kdobat = $request->kdobat;
        $do->namaobat = $request->namaobat;
        $do->kadaluarsa = $request->kadaluarsa;
        $do->save();


        return redirect('/dataobat/');
    }

}
