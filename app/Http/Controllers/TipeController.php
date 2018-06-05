<?php

namespace App\Http\Controllers;

use App\Tipe;
use App\Merk;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Tipe::all();
        return view('tipe.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = Merk::all();
        return view('tipe.create',compact('a'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'merk_id' => 'required',

        ]);

         $tipes = new Tipe;
         $tipes->nama = $request->nama;
         $tipes->merk_id = $request->merk_id;
         $tipes->save();
        return redirect()->route('tipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = Tipe::findOrFail($id);
        return view('tipe.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = Tipe::findOrFail($id);
        $a = Merk::all();
        $selectedTP = Tipe::findOrFail($id)->merk_id;
        return view('tipe.edit',compact('a','b','selectedTP'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'merk_id' => 'required',

        ]);

         $b = Tipe::findOrFail($id);
         $b->nama = $request->nama;
         $b->merk_id = $request->merk_id;
         $b->save();
        return redirect()->route('tipe.index');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipe $tipe)
    {
        $a = Tipe::findOrFail($id);
        $a->delete();
        return redirect()->route('tipe.index');
    }
}
