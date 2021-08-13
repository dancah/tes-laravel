<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk As Produks;
use App\Models\Kategori;

class Produk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;

        $produks = Produks::where('nama','like','%'.$cari.'%')
        ->orwhere('kode','like','%'.$cari.'%')
        ->get();

        return view('produk.index',compact(
            'produks',
            'cari'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $produks = new Produks;
        $kategoris = Kategori::Orderby('kategori','asc')->get();
        return view('produk.create',compact(
            'produks',
            'kategoris'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produks = new Produks;

        $produks->nama = $request->nama;
        $produks->kode = $request->kode;
        $produks->jumlah = $request->jumlah;
        $produks->harga = $request->harga;
        $produks->kategori = $request->kategori;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('gambar/', $name);
            $produks->gambar = $name;
        }
        $produks->save();
        return redirect('produk');
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
        $produks = Produks::find($id);
        $kategoris = Kategori::Orderby('kategori','asc')->get();
        $row = $produks;
        return view('produk.edit',compact(
            'produks',
            'row',
            'kategoris'
        ));
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
        $produks = Produks::find($id);

        $produks->nama = $request->nama;
        $produks->kode = $request->kode;
        $produks->jumlah = $request->jumlah;
        $produks->harga = $request->harga;
        $produks->kategori = $request->kategori;
        if ($request->hasFile('image')) {
            $produks->delete_image();
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('gambar/', $name);
            $produks->gambar = $name;
        }
        $produks->save();
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produks = Produks::find($id);
        $produks->delete();
        $produks->delete_image();
        return redirect('produk');
    }
}
