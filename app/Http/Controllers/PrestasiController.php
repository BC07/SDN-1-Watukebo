<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestasi = new Prestasi;

        if( $request->hasFile('prestasiImage') ) {
            $file = $request->file('prestasiImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/prestasi/', $filename);
            $prestasi->prestasiImage = $filename;
        }
        $prestasi->prestasiDesc = $request->input('prestasiDesc');


        $prestasi->save();
        return redirect()->route('prestasi.index', [$prestasi]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $prestasi = Prestasi::all();
        return view('tentang', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit', compact('prestasi'));    
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
        $prestasi = Prestasi::find($id);

        if( $request->hasFile('prestasiImage') ) {
            $destination = 'images/prestasi/'.$prestasi->prestasiImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('prestasiImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/prestasi/', $filename);
            $prestasi->prestasiImage = $filename;
        }

        $prestasi->update();
        return redirect()->route('prestasi.index', [$prestasi]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::find($id);
        
        $destination = 'images/prestasi/'.$prestasi->prestasiImage;
        
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $destination= 'images/prestasi/'.$prestasi->prestasiImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        Prestasi::findOrFail($id)->delete();
        
        return redirect()->back();
    }
}
