<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoadCell;

class DashboardController extends Controller
{
    public function index(){
        $data = LoadCell::all();

        $m = 1.0019;
        $c = 0.02004;
        $y_aksen = [];

        foreach($data as $value){
            $s1 = $value->s1;   
            $s2 = $value->s2;
            $s3 = $value->s3;
            $s4 = $value->s4;

            $x = $s1 + $s2 + $s3 + $s4;
            array_push($y_aksen,$m * $x + $c);    
                
        }
        // dd($y_aksen);

        return view('dashboard.dashboard',[
            'data' => $data,
            'y_aksen' => $y_aksen,
        ]);
    }

}
