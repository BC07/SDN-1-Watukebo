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

        $kelasdeskripsi->kelas1aDesc = $request->input('kelas1aDesc');
        if( $request->hasFile('kelas1aImage') ) {
            $file = $request->file('kelas1aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas1a/', $filename);
            $kelasdeskripsi->kelas1aImage = $filename;
        }
        $kelasdeskripsi->kelas1bDesc = $request->input('kelas1bDesc');
        if( $request->hasFile('kelas1bImage') ) {
            $file = $request->file('kelas1bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas1b/', $filename);
            $kelasdeskripsi->kelas1bImage = $filename;
        }

        $kelasdeskripsi->kelas2aDesc = $request->input('kelas2aDesc');
        if( $request->hasFile('kelas2aImage') ) {
            $file = $request->file('kelas2aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas2a/', $filename);
            $kelasdeskripsi->kelas2aImage = $filename;
        }
        $kelasdeskripsi->kelas2bDesc = $request->input('kelas2bDesc');
        if( $request->hasFile('kelas2bImage') ) {
            $file = $request->file('kelas2bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas2b/', $filename);
            $kelasdeskripsi->kelas2bImage = $filename;
        }

        $kelasdeskripsi->kelas3aDesc = $request->input('kelas3aDesc');
        if( $request->hasFile('kelas3aImage') ) {
            $file = $request->file('kelas3aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas3a/', $filename);
            $kelasdeskripsi->kelas3aImage = $filename;
        }
        $kelasdeskripsi->kelas3bDesc = $request->input('kelas3bDesc');
        if( $request->hasFile('kelas3bImage') ) {
            $file = $request->file('kelas3bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas3b/', $filename);
            $kelasdeskripsi->kelas3bImage = $filename;
        }

        $kelasdeskripsi->kelas4aDesc = $request->input('kelas4aDesc');
        if( $request->hasFile('kelas4aImage') ) {
            $file = $request->file('kelas4aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas4a/', $filename);
            $kelasdeskripsi->kelas4aImage = $filename;
        }
        $kelasdeskripsi->kelas4bDesc = $request->input('kelas4bDesc');
        if( $request->hasFile('kelas4bImage') ) {
            $file = $request->file('kelas4bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas4b/', $filename);
            $kelasdeskripsi->kelas4bImage = $filename;
        }

        $kelasdeskripsi->kelas5aDesc = $request->input('kelas5aDesc');
        if( $request->hasFile('kelas5aImage') ) {
            $file = $request->file('kelas5aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas5a/', $filename);
            $kelasdeskripsi->kelas5aImage = $filename;
        }
        $kelasdeskripsi->kelas5bDesc = $request->input('kelas5bDesc');
        if( $request->hasFile('kelas5bImage') ) {
            $file = $request->file('kelas5bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas5b/', $filename);
            $kelasdeskripsi->kelas5bImage = $filename;
        }

        $kelasdeskripsi->kelas6aDesc = $request->input('kelas6aDesc');
        if( $request->hasFile('kelas6Image') ) {
            $file = $request->file('kelas6Image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas6/', $filename);
            $kelasdeskripsi->kelas6Image = $filename;
        }
        $kelasdeskripsi->kelas6bDesc = $request->input('kelas6bDesc');
        if( $request->hasFile('kelas6aImage') ) {
            $file = $request->file('kelas6aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas6a/', $filename);
            $kelasdeskripsi->kelas6aImage = $filename;
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

        $kelasdeskripsi->kelas1aDesc = $request->input('kelas1aDesc');
        if( $request->hasFile('kelas1aImage') ) {
            $destination= 'images/kelas1a/'.$kelasdeskripsi->kelas1aImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas1aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas1a/', $filename);
            $kelasdeskripsi->kelas1aImage = $filename;
        }
        $kelasdeskripsi->kelas1bDesc = $request->input('kelas1bDesc');
        if( $request->hasFile('kelas1bImage') ) {
            $destination= 'images/kelas1b/'.$kelasdeskripsi->kelas1bImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas1bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas1b/', $filename);
            $kelasdeskripsi->kelas1bImage = $filename;
        }

        $kelasdeskripsi->kelas2aDesc = $request->input('kelas2aDesc');
        if( $request->hasFile('kelas2aImage') ) {
            $destination= 'images/kelas2a/'.$kelasdeskripsi->kelas2aImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas2aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas2a/', $filename);
            $kelasdeskripsi->kelas2aImage = $filename;
        }
        $kelasdeskripsi->kelas2bDesc = $request->input('kelas2bDesc');
        if( $request->hasFile('kelas2bImage') ) {
            $destination= 'images/kelas2b/'.$kelasdeskripsi->kelas2bImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas2bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas2b/', $filename);
            $kelasdeskripsi->kelas2bImage = $filename;
        }

        $kelasdeskripsi->kelas3aDesc = $request->input('kelas3aDesc');
        if( $request->hasFile('kelas3aImage') ) {
            $destination= 'images/kelas3a/'.$kelasdeskripsi->kelas3aImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas3aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas3a/', $filename);
            $kelasdeskripsi->kelas3aImage = $filename;
        }
        $kelasdeskripsi->kelas3bDesc = $request->input('kelas3bDesc');
        if( $request->hasFile('kelas3bImage') ) {
            $destination= 'images/kelas3b/'.$kelasdeskripsi->kelas3bImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas3bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas3b/', $filename);
            $kelasdeskripsi->kelas3bImage = $filename;
        }

        $kelasdeskripsi->kelas4aDesc = $request->input('kelas4aDesc');
        if( $request->hasFile('kelas4aImage') ) {
            $destination= 'images/kelas4a/'.$kelasdeskripsi->kelas4aImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas4aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas4a/', $filename);
            $kelasdeskripsi->kelas4aImage = $filename;
        }
        $kelasdeskripsi->kelas4bDesc = $request->input('kelas4bDesc');
        if( $request->hasFile('kelas4bImage') ) {
            $destination= 'images/kelas4b/'.$kelasdeskripsi->kelas4bImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas4bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas4b/', $filename);
            $kelasdeskripsi->kelas4bImage = $filename;
        }
        

        $kelasdeskripsi->kelas5aDesc = $request->input('kelas5aDesc');
        if( $request->hasFile('kelas5aImage') ) {
            $destination= 'images/kelas5a/'.$kelasdeskripsi->kelas5aImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas5aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas5a/', $filename);
            $kelasdeskripsi->kelas5aImage = $filename;
        }
        $kelasdeskripsi->kelas5bDesc = $request->input('kelas5bDesc');
        if( $request->hasFile('kelas5bImage') ) {
            $destination= 'images/kelas5b/'.$kelasdeskripsi->kelas5bImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas5bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas5b/', $filename);
            $kelasdeskripsi->kelas5bImage = $filename;
        }

        $kelasdeskripsi->kelas6aDesc = $request->input('kelas6aDesc');
        if( $request->hasFile('kelas6aImage') ) {
            $destination= 'images/kelas6a/'.$kelasdeskripsi->kelas6aImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas6aImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas6a/', $filename);
            $kelasdeskripsi->kelas6aImage = $filename;
        }
        $kelasdeskripsi->kelas6bDesc = $request->input('kelas6bDesc');
        if( $request->hasFile('kelas6bImage') ) {
            $destination= 'images/kelas6b/'.$kelasdeskripsi->kelas6bImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kelas6bImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/kelas6b/', $filename);
            $kelasdeskripsi->kelas6bImage = $filename;
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
        
        $destination= 'images/kelas1a/'.$kelasdeskripsi->kelas1aImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $destination= 'images/kelas1b/'.$kelasdeskripsi->kelas1bImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        $destination= 'images/kelas2a/'.$kelasdeskripsi->kelas2aImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $destination= 'images/kelas2b/'.$kelasdeskripsi->kelas2bImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        $destination= 'images/kelas3a/'.$kelasdeskripsi->kelas4aImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $destination= 'images/kelas3b/'.$kelasdeskripsi->kelas4bImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        $destination= 'images/kelas4a/'.$kelasdeskripsi->kelas4aImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $destination= 'images/kelas4b/'.$kelasdeskripsi->kelas4bImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        $destination= 'images/kelas5a/'.$kelasdeskripsi->kelas5aImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $destination= 'images/kelas5b/'.$kelasdeskripsi->kelas5bImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        $destination= 'images/kelas6a/'.$kelasdeskripsi->kelas6aImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $destination= 'images/kelas6b/'.$kelasdeskripsi->kelas6bImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }

        KelasDeskripsi::findOrFail($id)->delete();
        return redirect()->back();
    }
}
