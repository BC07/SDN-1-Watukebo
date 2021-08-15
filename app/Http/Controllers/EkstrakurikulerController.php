<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('ekstrakurikulers.index', compact('ekstrakurikulers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ekstrakurikulers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekstrakurikulers = new Ekstrakurikuler;

        $ekstrakurikulers->namaEkskul = $request->input('namaEkskul');

        if ($request->hasFile('ekskulImage')) {
            $file = $request->file('ekskulImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/ekstrakurikuler/', $filename);
            $ekstrakurikulers->ekskulImage = $filename;
        }

        $ekstrakurikulers->save();
        return redirect()->route('ekstrakurikulers.index', [$ekstrakurikulers]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('program', compact('ekstrakurikulers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ekstrakurikulers = Ekstrakurikuler::findOrFail($id);
        return view('ekstrakurikulers.edit', compact('ekstrakurikulers'));
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
        $ekstrakurikulers = Ekstrakurikuler::find($id);
        $ekstrakurikulers->namaEkskul = $request->input('namaEkskul');

        if ($request->hasFile('ekskulImage')) {
            $destination = 'images/ekstrakurikuler/' . $ekstrakurikulers->ekskulImage;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('ekskulImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/ekstrakurikuler/', $filename);
            $ekstrakurikulers->ekskulImage = $filename;
        }


        $ekstrakurikulers->update();
        return redirect()->route('ekstrakurikulers.index', [$ekstrakurikulers]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ekstrakurikulers = Ekstrakurikuler::find($id);

        $destination = 'images/ekstrakurikuler/' . $ekstrakurikulers->ekskulImage;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        Ekstrakurikuler::findOrFail($id)->delete();

        return redirect()->back();
    }
}
