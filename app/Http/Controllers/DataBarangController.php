<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBarang;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_barang = DataBarang::all();

        return view('data.main',[
            'data_barang' => $data_barang,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "haha";
        $validatedData = $request->validate([
            'merk' =>'required',
            'seri' => 'required|unique:data_barang',
            'berat_per_box' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'rak' => 'required'
        ]);

       DataBarang::create([
            'merk' => $request->merk,
            'seri' => $request->seri,
            'berat_per_box' => $request->berat_per_box,
            'jumlah' => $request->$jumlah,
            'rak' => $request->$rak
        ]);

        return redirect('/dataBarang')->with('success','Data barang berhasil ditabhakan');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
