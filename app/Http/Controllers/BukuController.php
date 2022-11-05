<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
            'Judul_Buku'=>'required'
        ]);
        $buku = new Buku([
            'Judul_Buku' =>$request->get('Judul_Buku'),
            'Kode_Buku' =>$request->get('Kode_Buku'),
            'Penulis' =>$request->get('Penulis'),
            'Penerbit' =>$request->get('Penerbit'),
            'Status_Buku' =>$request->get('Status_Buku'),
            'Tanggal_Terbit'=>$request->get('Tanggal_Terbit')
        ]);
        $buku->save();
        return view('buku.store', compact('buku'));
        return redirect('/buku')->with('Success', 'Input berhasil');
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
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
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
        $request->validate([
            'Judul _Buku'=>'required'
        ]);
        $buku = Stock::find($id);
        $buku->Judul_Buku = $request->get('Judul_Buku');
        $buku->Kode_Buku = $request->get('Kode_Buku');
        $buku->Penulis = $request->get('Penulis');
        $buku->Penerbit = $request->get('Penerbit');
        $buku->Status_Buku = $request->get('Status_Buku');
        $buku->Tanggal_Terbit = $request->get('Tanggal_Terbit');
        
        $buku->save();
        return redirect('/buku')->with('Success', 'Input berhasil');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku ->delete();
        return redirect('/buku')->with('Success', 'Hapus berhasil');
    }
}
