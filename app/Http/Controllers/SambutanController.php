<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sambutans = Sambutan::all();
        return view('sambutans.index', compact('sambutans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sambutans = new Sambutan;
        if(Sambutan::all()->isEmpty()){
            return view('sambutans.create');
        }else{
            return redirect()->route('sambutans.index', [$sambutans]);
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
        $sambutans = new Sambutan;
        $sambutans->kepalaDesc = $request->input('kepalaDesc');

        if( $request->hasFile('kepalaImage') ) {
                $file = $request->file('kepalaImage');
                $filename  = time() . '.' . $file->getClientOriginalExtension();
                $file->move('images/sambutanKepala/', $filename);
                $sambutans->kepalaImage = $filename;
        }
    
        $sambutans->guruDesc = $request->input('guruDesc');
    
        if( $request->hasFile('guruImage') ) {
                $file = $request->file('guruImage');
                $filename  = time() . '.' . $file->getClientOriginalExtension();
                $file->move('images/sambutanGuru/', $filename);
                $sambutans->guruImage = $filename;
        }
        $sambutans->save();
        return redirect()->route('sambutans.index', [$sambutans]);
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
        $sambutans = Sambutan::findOrFail($id);
        return view('sambutans.edit', compact('sambutans'));    
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
        $sambutans = Sambutan::find($id);
        $sambutans->kepalaDesc = $request->input('kepalaDesc');

        if( $request->hasFile('kepalaImage') ) {
            $destination= 'images/sambutanKepala/'.$sambutans->kepalaImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('kepalaImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/sambutanKepala/', $filename);
            $sambutans->kepalaImage = $filename;
        }

        $sambutans->guruDesc = $request->input('guruDesc');

        if( $request->hasFile('guruImage') ) {
            $destination= 'images/sambutanGuru/'.$sambutans->guruImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('guruImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/sambutanGuru/', $filename);
            $sambutans->guruImage = $filename;
        }
        $sambutans->update();
        return redirect()->route('sambutans.index', [$sambutans]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sambutans = Sambutan::find($id);
        
        $destination= 'images/sambutanKepala/'.$sambutans->kepalaImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $destination= 'images/sambutanGuru/'.$sambutans->guruImage;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        Sambutan::findOrFail($id)->delete();
        
        return redirect()->back();
    }
}
