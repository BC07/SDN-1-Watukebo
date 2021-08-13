<?php

namespace App\Http\Controllers;

use App\Models\GaleriTentang;
use App\Models\KelasDeskripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriTentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeritentangs = GaleriTentang::all();
        return view('galeritentang.index', compact('galeritentangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeritentang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galeritentangs = new GaleriTentang;

        if( $request->hasFile('galeriTentangImage') ) {
            $file = $request->file('galeriTentangImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/galeriTentang/', $filename);
            $galeritentangs->galeriTentangImage = $filename;
        }

        $galeritentangs->save();
        return redirect()->route('galeritentang.index', [$galeritentangs]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $galeritentangs = GaleriTentang::all();
        $kelasdeskripsi = KelasDeskripsi::all();
        return view('tentang', compact('galeritentangs', 'kelasdeskripsi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeritentangs = GaleriTentang::findOrFail($id);
        return view('galeritentang.edit', compact('galeritentangs'));    
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
        $galeritentangs = GaleriTentang::find($id);

        if( $request->hasFile('galeriTentangImage') ) {
            $destination = 'images/galeriTentang/'.$galeritentangs->galeriTentangImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('galeriTentangImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/galeriTentangImage/', $filename);
            $galeritentangs->galeriTentangImage = $filename;
        }

        $galeritentangs->update();
        return redirect()->route('galeritentang.index', [$galeritentangs]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeritentangs = GaleriTentang::find($id);
        
        $destination = 'images/galeriTentang/'.$galeritentangs->galeriTentangImage;
        
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $destination= 'images/galeriTentang/'.$galeritentangs->galeriTentangImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        GaleriTentang::findOrFail($id)->delete();
        
        return redirect()->back();
    }
}
