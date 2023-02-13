<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Seriescontroladas extends Controller
{
    public function index(Request $request){
        $series = [
            'Naruto',
            'One Piece',
            'Bleach'
        ];
        
        return view('Series.index') -> with('series', $series);
    }

    public function create(){
        return view('Series.create');
    }
}