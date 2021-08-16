<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sambutan;
use App\Models\LinkDaftar;

class BerandaController extends Controller
{
    public function index()
    {
        $beranda = Sambutan::all();
        $linkdaftar = LinkDaftar::all();
        return view('beranda', compact('beranda', 'linkdaftar'));
    }
}
