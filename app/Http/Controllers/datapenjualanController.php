<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapenjualan;

class datapenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpenjualan = datapenjualan::all();
        return view('datapenjualan', compact('dtpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inputpenjualan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        datapenjualan::create([
            'id_jual' => $request->id_jual,
            'id_barang' => $request->id_barang,
            'qty' => $request->qty,
            'harga' => $request->harga,
        ]);

        return redirect('datapenjualan')->with('success','Data Berhasil Tersimpan!');
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
        $penjualan = datapenjualan::findorfail($id);
        return view('editpenjualan',compact('penjualan'));
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
        $penjualan = datapenjualan::findorfail($id);
        $penjualan->update($request->all());
        return redirect('datapenjualan')->with('success','Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = datapenjualan::findorfail($id);
        $penjualan->delete();
        return back()->with('info','Data Berhasil Dihapus!');
    }
}
