<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa;
        $siswa->siswaDesc = $request->input('siswaDesc');

        if( $request->hasFile('siswaImage') ) {
            $file = $request->file('siswaImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/siswa/', $filename);
            $siswa->siswaImage = $filename;
        }

        $siswa->save();
        return redirect()->route('siswa.index', [$siswa]);
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
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));    
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
        $siswa = Siswa::find($id);
        $siswa->siswaDesc = $request->input('siswaDesc');

        if( $request->hasFile('siswaImage') ) {
            $destination= 'images/siswa/'.$siswa->siswaImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('siswaImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/siswa/', $filename);
            $siswa->siswaImage = $filename;
        }

        $siswa->siswaDesc = $request->input('siswaDesc');

        if( $request->hasFile('siswaImage') ) {
            $destination= 'images/siswa/'.$siswa->siswaImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('siswaImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/sambutanGuru/', $filename);
            $siswa->siswaImage = $filename;
        }
        $siswa->update();
        return redirect()->route('siswa.index', [$siswa]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        
        $destination= 'images/siswa/'.$siswa->siswaImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        Siswa::findOrFail($id)->delete();
        
        return redirect()->back();
    }
}
