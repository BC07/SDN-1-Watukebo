<?php

namespace App\Http\Controllers;

use App\Models\Tabelsiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TabelsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabelsiswa = Tabelsiswa::all();
        return view('tabelsiswa.index', compact('tabelsiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tabelsiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabelsiswa = new Tabelsiswa;
        $tabelsiswa->name = $request->input('name');
        $tabelsiswa->nis = $request->input('nis');
        $tabelsiswa->nisn = $request->input('nisn');
        $tabelsiswa->ttl = $request->input('ttl');
        $tabelsiswa->save();
        return redirect()->route('tabelsiswa.index', [$tabelsiswa]);
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
        $tabelsiswa = Tabelsiswa::findOrFail($id);
        return view('tabelsiswa.edit', compact('tabelsiswa'));    
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
        $tabelsiswa = Tabelsiswa::find($id);
        $tabelsiswa->name = $request->input('name');
        $tabelsiswa->nis = $request->input('nis');
        $tabelsiswa->nisn = $request->input('nisn');
        $tabelsiswa->ttl = $request->input('ttl');
        $tabelsiswa->update();
        return redirect()->route('tabelsiswa.index', [$tabelsiswa]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabelsiswa::findOrFail($id)->delete();
        return redirect()->back();
    }
}
