<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    
    public function home() {

        $saint = Saint::all();

        $data = [

            'saints' => $saint
        ];

        return view('pages.home' , $data);
    } 
}
