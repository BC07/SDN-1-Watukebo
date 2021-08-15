<?php

namespace App\Http\Controllers;

use App\Models\KelasDeskripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KelasDeskripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelasdeskripsi = KelasDeskripsi::all();
        return view('kelasdeskripsi.index', compact('kelasdeskripsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelasdeskripsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelasdeskripsi = new KelasDeskripsi;

        $kelasdeskripsi->kelas1Desc = $request->input('kelas1Desc');
        if( $request->hasFile('kelas1Image') ) {
            $file = $request->file('kelas1Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas1/', $filename);
            $kelasdeskripsi->kelas1Image = $filename;
        }

        $kelasdeskripsi->kelas2Desc = $request->input('kelas2Desc');
        if( $request->hasFile('kelas2Image') ) {
            $file = $request->file('kelas2Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas2/', $filename);
            $kelasdeskripsi->kelas2Image = $filename;
        }

        $kelasdeskripsi->kelas3Desc = $request->input('kelas3Desc');
        if( $request->hasFile('kelas3Image') ) {
            $file = $request->file('kelas3Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas3/', $filename);
            $kelasdeskripsi->kelas3Image = $filename;
        }

        $kelasdeskripsi->kelas4Desc = $request->input('kelas4Desc');
        if( $request->hasFile('kelas4Image') ) {
            $file = $request->file('kelas4Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas4/', $filename);
            $kelasdeskripsi->kelas4Image = $filename;
        }

        $kelasdeskripsi->kelas5Desc = $request->input('kelas5Desc');
        if( $request->hasFile('kelas5Image') ) {
            $file = $request->file('kelas5Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas5/', $filename);
            $kelasdeskripsi->kelas5Image = $filename;
        }

        $kelasdeskripsi->kelas6Desc = $request->input('kelas6Desc');
        if( $request->hasFile('kelas6Image') ) {
            $file = $request->file('kelas6Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas6/', $filename);
            $kelasdeskripsi->kelas6Image = $filename;
        }

        $kelasdeskripsi->save();
        return redirect()->route('kelasdeskripsi.index', [$kelasdeskripsi]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $kelasdeskripsi = KelasDeskripsi::all();
        return view('tentang', compact('kelasdeskripsi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelasdeskripsi = KelasDeskripsi::findOrFail($id);
        return view('kelasdeskripsi.edit', compact('kelasdeskripsi'));    
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
        $kelasdeskripsi = KelasDeskripsi::find($id);

        $kelasdeskripsi->kelas1Desc = $request->input('kelas1Desc');
        if( $request->hasFile('kelas1Image') ) {
            $destination= 'images/kelas1/'.$kelasdeskripsi->kelas1Image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas1Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas1/', $filename);
            $kelasdeskripsi->kelas1Image = $filename;
        }

        $kelasdeskripsi->kelas2Desc = $request->input('kelas2Desc');
        if( $request->hasFile('kelas2Image') ) {
            $destination= 'images/kelas2/'.$kelasdeskripsi->kelas2Image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas2Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas2/', $filename);
            $kelasdeskripsi->kelas2Image = $filename;
        }

        $kelasdeskripsi->kelas3Desc = $request->input('kelas3Desc');
        if( $request->hasFile('kelas3Image') ) {
            $destination= 'images/kelas3/'.$kelasdeskripsi->kelas3Image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas3Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas3/', $filename);
            $kelasdeskripsi->kelas3Image = $filename;
        }

        $kelasdeskripsi->kelas4Desc = $request->input('kelas4Desc');
        if( $request->hasFile('kelas4Image') ) {
            $destination= 'images/kelas4/'.$kelasdeskripsi->kelas4Image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas4Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas4/', $filename);
            $kelasdeskripsi->kelas4Image = $filename;
        }

        $kelasdeskripsi->kelas5Desc = $request->input('kelas5Desc');
        if( $request->hasFile('kelas5Image') ) {
            $destination= 'images/kelas5/'.$kelasdeskripsi->kelas5Image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas5Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas5/', $filename);
            $kelasdeskripsi->kelas5Image = $filename;
        }

        $kelasdeskripsi->kelas6Desc = $request->input('kelas6Desc');
        if( $request->hasFile('kelas6Image') ) {
            $destination= 'images/kelas6/'.$kelasdeskripsi->kelas6Image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas6Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas6/', $filename);
            $kelasdeskripsi->kelas6Image = $filename;
        }

        $kelasdeskripsi->update();
        return redirect()->route('kelasdeskripsi.index', [$kelasdeskripsi]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelasdeskripsi = KelasDeskripsi::find($id);
        
        $destination= 'images/kelas1/'.$kelasdeskripsi->kelas1Image;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        $destination= 'images/kelas2/'.$kelasdeskripsi->kelas2Image;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        $destination= 'images/kelas3/'.$kelasdeskripsi->kelas4Image;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        $destination= 'images/kelas4/'.$kelasdeskripsi->kelas4Image;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        $destination= 'images/kelas5/'.$kelasdeskripsi->kelas5Image;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        $destination= 'images/kelas6/'.$kelasdeskripsi->kelas6Image;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        KelasDeskripsi::findOrFail($id)->delete();
        return redirect()->back();
    }
}
