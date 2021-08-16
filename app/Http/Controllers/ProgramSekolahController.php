<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProgramSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = Program::all();
        return view('programsekolah.index', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programsekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programsekolah = new Program;
        $programsekolah->umum = $request->input('umum');

        $programsekolah->khusus = $request->input('khusus');

        $programsekolah->jangkapanjang = $request->input('jangkapanjang');

        $programsekolah->save();
        return redirect()->route('programsekolah.index', [$programsekolah]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programsekolah = Program::findOrFail($id);
        return view('programsekolah.edit', compact('programsekolah'));
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
        $programsekolah = Program::find($id);
        $programsekolah->umum = $request->input('umum');

        $programsekolah->khusus = $request->input('khusus');

        $programsekolah->khusus = $request->input('jangkapanjang');

        $programsekolah->update();
        return redirect()->route('programsekolah.index', [$programsekolah]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $programsekolah = Program::find($id);

        Program::findOrFail($id)->delete();

        return redirect()->back();
    }
}
