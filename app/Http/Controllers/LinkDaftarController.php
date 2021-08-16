<?php

namespace App\Http\Controllers;

use App\Models\LinkDaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LinkDaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linkdaftar = LinkDaftar::all();
        return view('linkdaftars.index', compact('linkdaftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $linkdaftar = new LinkDaftar;
        if(LinkDaftar::all()->isEmpty()){
            return view('linkdaftars.create');
        }else{
            return redirect()->route('linkdaftars.index', [$linkdaftar]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linkdaftar = new LinkDaftar;
        $linkdaftar->linkdaftar = $request->input('linkdaftar');
        $linkdaftar->save();
        return redirect()->route('linkdaftars.index', [$linkdaftar]);
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
        LinkDaftar::findOrFail($id)->delete();
        return redirect()->back();
    }
}
