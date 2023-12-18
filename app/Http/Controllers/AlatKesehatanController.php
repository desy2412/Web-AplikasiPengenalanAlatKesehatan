<?php

namespace App\Http\Controllers;

use App\Models\AlatKesehatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlatKesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AlatKesehatan::all();
        return view('AlatKesehatan.index',[
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/gambar', $image->hashName());

        //create post
        AlatKesehatan::create([
            'gambar'     => $image->hashName(),
            'nama_alat'     => $request->nama_alat,
            'deskripsi'     => $request->deskripsi(),
        
        ]);

        //redirect to index
        return redirect()->route('alatkesehatan.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $data = AlatKesehatan::find($id);
        return view('AlatKesehatan.edit',[
            'data' => $data,
        ]);
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
        $data = AlatKesehatan::find($id);
        //upload image
        $image = $request->file('gambar');

        if ($image){
                //delete old image
            Storage::delete('public/posts/'.$data->gambar);
            $image->storeAs('public/gambar', $image->hashName());

            //create post
            $data->update([
                'gambar'     => $image->hashName(),
                'nama_alat'     => $request->nama_alat,
            ]);
        }else{
            $data->update([
                'nama_alat'     => $request->nama_alat,
            ]);
        }
       

        //redirect to index
        return redirect()->route('alatkesehatan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = AlatKesehatan::find($id);
        Storage::delete('public/posts/'.$data->gambar);
        $data->delete();
         //redirect to index
         return redirect()->route('alatkesehatan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
