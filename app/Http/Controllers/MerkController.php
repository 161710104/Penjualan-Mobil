<?php

namespace App\Http\Controllers;

use App\Merk;
use App\Tipe;
use File;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Merk::all();
        return view('merk.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merk.create');
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
            'gambar' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',

        ]);

         $merks = new Merk;
         $merks->nama = $request->nama;
         $merks->deskripsi = $request->deskripsi;

         
         if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $merks->gambar = $filename;
        }
         $merks->save();
        return redirect()->route('merkmobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = Merk::findOrFail($id);
        return view('merk.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Merk::findOrFail($id);
        return view('merk.edit',compact('a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',

        ]);

         $a = Merk::find($id);
         $a->update($request->all());

         if ($request->hasFile('gambar')) {
         //mengambil gambar yang diupload berikut extensinya
            $filename = null;
            $uploaded_cover = $request->file('gambar');
            $extension = $uploaded_cover->getClientOriginalExtension();

        //membuat nama file random dengan extension
            $filename = md5(time()). '.' . $extension;
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';

            $upload_cover->move($desinationPath, $filename);

            //hapus cover lama jika ada 
            if($a->gambar){
                $old_cover = $a->gambar;
                $filepath = publish_path(). DIRECTORY_SEPARATOR. 'img' . DIRECTORY_SEPARATOR . $a->gambar;

                try{
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //
                }
            }
            }
         $a->save();
        return redirect()->route('merkmobil.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merk $merk)
    {
        $merk = Merk::findOrFail($merk->id);
        if ($merk->gambar){
            $old_foto = $merk->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $a->gambar;

            try{
            File::delete($filepath);
            } catch (FileNotFoundException $e){

            }
        }
        $merk->delete();
        return redirect()->route('merkmobil.index');
    }
}
