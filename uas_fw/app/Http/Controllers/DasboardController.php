<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dasboard;

class DasboardController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $db = Dasboard::all();
        return view('dasboard.index',compact('nomor','db'));
    }
}
