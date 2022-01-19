<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\databrg;
class databrgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtbarang = databrg::all();
        return view('databrg', compact('dtbarang'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inputbrg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        databrg::create([
            'id_barang' => $request->id_barang,
            'id_suplier' => $request->id_suplier,
            'jenis' => $request->jenis,
            'size' => $request->size,
            'warna' => $request->warna,
            'qty' => $request->qty,
            'harga' => $request->harga,
        ]);

        return redirect('databrg')->with('success','Data Berhasil Tersimpan!');
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
        $barang = databrg::findorfail($id);
        return view('editbrg',compact('barang'));
        
        
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
        $barang = databrg::findorfail($id);
        $barang->update($request->all());
        return redirect('databrg')->with('success','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = databrg::findorfail($id);
        $barang->delete();
        return back()->with('info','Data Berhasil Dihapus');
    }
}
?>