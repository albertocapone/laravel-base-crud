<?php

namespace App\Http\Controllers;

use App\Cagnolino;

use Illuminate\Http\Request;

class PagesManager extends Controller
{
    public function index(){
        $cagnolini = Cagnolino::all();
        return view('index', compact('cagnolini'));
    }

    public function showCagnolino($id){
        $cagnolino = Cagnolino::findOrFail($id);
        return view('showCagnolino', compact('cagnolino'));

    }
}
