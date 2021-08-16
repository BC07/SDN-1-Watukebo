<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Sekolah;
use App\Models\Siswa;
use App\Models\Ekstrakurikuler;

class ProgramController extends Controller
{
    public function index()
    {
        $program = Program::all();
        $umum = Program::get(['umum']);
        $khusus = Program::get(['khusus']);
        $jangkapanjang = Program::get(['jangkapanjang']);
        $sekolah = Sekolah::get(['sekolahDesc', 'sekolahImage']);
        $siswa = Siswa::get(['siswaDesc', 'siswaImage']);
        $program = Program::all();
        $ekstrakurikulers = Ekstrakurikuler::simplePaginate(3);
        return view('program', compact('program', 'umum', 'khusus', 'jangkapanjang', 'sekolah', 'siswa', 'ekstrakurikulers'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $program = Program::all();
        return view('index', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
