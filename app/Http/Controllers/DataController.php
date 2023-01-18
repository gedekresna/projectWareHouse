<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){
        return view('data.main');
    }

    public function create(){
        return view('data.create_data');
    }
}
