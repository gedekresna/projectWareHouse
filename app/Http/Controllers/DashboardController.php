<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoadCell;

class DashboardController extends Controller
{
    public function index(){
        $data = LoadCell::all();

        $data = LoadCell::query()
            ->select('id','time')
            ->selectRaw('
                (1.0019*(s1+s2+s3+s4)+0.0468) as y_aksen,
                (0.02004*(1.0019*(s1+s2+s3+s4)+0.0468)+0.0009) as z_aksen 
            ')->get();


        // $m = 1.0019;
        // $c = 0.0468;
        // $b = 0.02004;
        // $a = 0.0009;
        // $y_aksen = [];
        // $z_aksen = [];

        // foreach($data as $value){
        //     $s1 = $value->s1;   
        //     $s2 = $value->s2;
        //     $s3 = $value->s3;
        //     $s4 = $value->s4;

        //     $x = $s1 + $s2 + $s3 + $s4;
        //     $y = $m * $x + $c;
        //     array_push($y_aksen,$y);  
        //     array_push($z_aksen,$b * $y + $a);  
                
        // }

        return view('dashboard.dashboard',[
            'data' => $data,
            // 'y_aksen' => $y_aksen,
            // 'z_aksen' => $z_aksen
        ]);
    }

}
