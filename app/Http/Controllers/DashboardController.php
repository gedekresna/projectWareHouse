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
            $x = $value->s1 + $value->s2 + $value->s3 + $value->s4;
            $y_aksen = $m * $x + $c;
        }

        return view('dashboard.dashboard',[
            'data' => $data,
            'y_aksen' => $y_aksen,
        ]);
    }

}
