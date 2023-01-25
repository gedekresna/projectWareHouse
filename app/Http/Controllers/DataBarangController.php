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
        return view('data.main',[
            'data_barang' => DataBarang::all(),
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
        $validatedData = $request->validate([
            'merk' =>'required',
            'seri' => 'required|unique:data_barang',
            'berat_per_box' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'rak' => 'required'
        ]);

       DataBarang::create($validatedData);

        return redirect('/dataBarang')->with('success','Data barang berhasil ditambhakan');
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
    public function edit(DataBarang $dataBarang)
    {
        return view('data.update_data',[
            'data' => $dataBarang,
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
        $validatedData = $request->validate([
            'merk' =>'required',
            'seri' => 'required|unique:data_barang,seri,'.$id,
            'berat_per_box' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'rak' => 'required'
        ]);

       DataBarang::where('id',$id)
       ->update($validatedData);

       return redirect('/dataBarang')->with('success','Data barang berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataBarang::destroy($id);

        return redirect('/dataBarang')->with('success','Data barang berhasil dihapus');
    }
}
