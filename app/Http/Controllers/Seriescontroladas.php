<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;
use Database\migrations;


class Seriescontroladas extends Controller
{
    public function index(){
        $series = Serie::query()->orderby('nome', 'desc')->get();
        return view('Series.index') -> with('series', $series);
    }

    public function create(){
        return view('Series.create');
    }

    public function store(Request $request){
        $nomeSerie=$request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        return redirect('/serie');
    }
    
}