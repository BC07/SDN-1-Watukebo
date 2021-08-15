<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('sekolah.index', compact('sekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sekolah = new Sekolah;
        $sekolah->sekolahDesc = $request->input('sekolahDesc');

        if( $request->hasFile('sekolahImage') ) {
            $file = $request->file('sekolahImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/sekolah/', $filename);
            $sekolah->sekolahImage = $filename;
        }

        $sekolah->save();
        return redirect()->route('sekolah.index', [$sekolah]);
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
        $sekolah = Sekolah::findOrFail($id);
        return view('sekolah.edit', compact('sekolah'));    
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
        $sekolah = Sekolah::find($id);
        $sekolah->sekolahDesc = $request->input('sekolahDesc');

        if( $request->hasFile('sekolahImage') ) {
            $destination= 'images/sekolah/'.$sekolah->sekolahImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('sekolahImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/sekolah/', $filename);
            $sekolah->sekolahImage = $filename;
        }

        $sekolah->sekolahDesc = $request->input('sekolahDesc');

        if( $request->hasFile('sekolahImage') ) {
            $destination= 'images/sekolah/'.$sekolah->sekolahImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('sekolahImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/sambutanGuru/', $filename);
            $sekolah->sekolahImage = $filename;
        }
        $sekolah->update();
        return redirect()->route('sekolah.index', [$sekolah]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sekolah = Sekolah::find($id);
        
        $destination= 'images/sekolah/'.$sekolah->sekolahImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        Sekolah::findOrFail($id)->delete();
        
        return redirect()->back();
    }
}
