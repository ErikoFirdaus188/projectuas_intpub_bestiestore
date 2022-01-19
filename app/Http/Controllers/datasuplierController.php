<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datasuplier;

class datasuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtsuplier = datasuplier::all();
        return view('dataspl', compact('dtsuplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inputspl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        datasuplier::create([
            'id_suplier' => $request->id_suplier,
            'nama_suplier' => $request->nama_suplier,
            'alamat' => $request->alamat,
        ]);

        return redirect('dataspl')->with('success','Data Berhasil Tersimpan!');
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
        $suplier = datasuplier::findorfail($id);
        return view('editspl',compact('suplier'));
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
        $suplier = datasuplier::findorfail($id);
        $suplier->update($request->all());
        return redirect('dataspl')->with('success','Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suplier = datasuplier::findorfail($id);
        $suplier->delete();
        return back()->with('info','Data Berhasil Dihapus!');
    }
}
