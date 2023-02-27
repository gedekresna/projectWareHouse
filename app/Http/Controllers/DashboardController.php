<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoadCell;
use App\Models\DataBarang;

class DashboardController extends Controller
{
    public function index(){   
            $data = LoadCell::query()
                ->select('id','time')
                ->selectRaw('
                    ROUND((1.0019*(s1+s2+s3+s4)+0.0468), 2) as y_aksen,
                    ROUND((0.02004*(1.0019*(s1+s2+s3+s4)+0.0468)+0.0009), 2) as z_aksen 
                ')
                ->orderBy('time')
                ->paginate(10);
        
            $dataChart = LoadCell::query()
            ->select('id','time','data_barang_id')
            ->selectRaw('
                ROUND((1.0019*(s1+s2+s3+s4)+0.0468), 2) as y_aksen,
                ROUND((0.02004*(1.0019*(s1+s2+s3+s4)+0.0468)+0.0009), 2) as z_aksen 
            ')
            ->orderBy('time')
            ->get();

           $dataBarang = DataBarang::latest()->first(); 
           $dataLoadCell = LoadCell::all();
    

        return view('dashboard.dashboard',[
            'data' => $data,
            'dataChart' => $dataChart,
            'dataBarang' => $dataBarang,
            'dataLoadCell' =>  $dataLoadCell
        ]);
    }

    public function getDataBarang($id){

        $lc_id= LoadCell::query()
                ->where('data_barang_id',$id)
                ->select('id','time')
                ->selectRaw('
                ROUND((1.0019*(s1+s2+s3+s4)+0.0468), 2) as y_aksen,
                ROUND((0.02004*(1.0019*(s1+s2+s3+s4)+0.0468)+0.0009), 2) as z_aksen 
                ')
                ->first();


        return response()->json([
            'lc_id' => $lc_id
        ]);
    }

    public function filterTable($id){
        $data_filtered = LoadCell::query()
                        ->where('data_barang_id',$id)
                        ->select('id','time')
                        ->selectRaw('
                        ROUND((1.0019*(s1+s2+s3+s4)+0.0468), 2) as y_aksen,
                        ROUND((0.02004*(1.0019*(s1+s2+s3+s4)+0.0468)+0.0009), 2) as z_aksen 
                        ')
                        ->get();

        // $data_filtered = DB::table('loadcell')
        // ->join('data_barang','data_barang.data_barang_id','=','loadcell.id')
        // ->where('data_barang_id',$rak)
        // ->select('id','time','rak')
        // ->selectRaw('
        // ROUND((1.0019*(s1+s2+s3+s4)+0.0468), 2) as y_aksen,
        // ROUND((0.02004*(1.0019*(s1+s2+s3+s4)+0.0468)+0.0009), 2) as z_aksen 
        // ')
        // ->first();

        return response()->json([
            'data_filtered' => $data_filtered,
        ]);
    }

}
