<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjang = Keranjang::paginate(10); 
        return view('keranjang.index', compact('keranjang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keranjang.create');
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
            'nama'=> 'required',
            'nm_barang'=>'required',
            'jumlah' => 'required',
            'alamat' => 'required',
        ],[
            'nama.required' => 'Nama wajib diisi',
            'nm_barang.required' => 'Nama barang wajib diisi',
            'jumlah.required' => 'Jumlah wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
        ]);
        Keranjang::create([
            'nama' =>$request->input('nama'),
            'nm_barang' =>$request->input('nm_barang'),
            'jumlah' =>$request->input('jumlah'),
            'alamat' =>$request->input('alamat'),
        ]);
        
        return redirect('keranjang')->with('success', 'Keranjang berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show(Keranjang $keranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Keranjang::findOrFail($id);
        $data = Keranjang::where('id',$id)->first();
        return view('keranjang.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=> 'required',
            'nm_barang'=>'required',
            'jumlah' => 'required',
            'alamat' => 'required',
        ],[
            'nama.required' => 'Nama wajib diisi',
            'nm_barang.required' => 'Nama barang wajib diisi',
            'jumlah.required' => 'Jumlah wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
        ]);
        $data = ([
            'nama' =>$request->nama,
            'nm_barang' =>$request->nm_barang,
            'jumlah' =>$request->jumlah,
            'alamat' =>$request->alamat,
        ]);
        
        Keranjang::where('id',$id)->update($data);
        return redirect('keranjang')->with('success', 'Keranjang berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        Keranjang::where('id',$id)->delete();
        return redirect('keranjang')->with('success', 'Keranjang berhasil dihapus');
    }
}