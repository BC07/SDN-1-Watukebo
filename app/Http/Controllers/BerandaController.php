<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sambutan;

class BerandaController extends Controller
{
    public function index()
    {
        $beranda = Sambutan::all();
        return view('beranda', compact('beranda'));
    }
}
