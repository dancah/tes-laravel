<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori As Kategoris;
class Kategori extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;

        $kategoris = Kategoris::where('kategori','like','%'.$cari.'%')
        ->get();

        return view('kategori.index',compact(
            'kategoris',
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
        $kategoris = new Kategoris;

        return view('kategori.create',compact(
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
        $kategoris = new Kategoris;

        $kategoris->kategori = $request->kategori;
        $kategoris->keterangan = $request->keterangan;
        $kategoris->save();
        return redirect('kategori');
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
        $kategoris = Kategoris::find($id);

        return view('kategori.edit',compact(
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
        $kategoris = Kategoris::find($id);

        $kategoris->kategori = $request->kategori;
        $kategoris->keterangan = $request->keterangan;
        $kategoris->save();
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoris = Kategoris::find($id);
        $kategoris->delete();
        return redirect('kategori');
    }
}
