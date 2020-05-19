<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function notas(){
        $notas = App\Nota::all();
        return view('notas', compact('notas'));
    }
    public function crear(Request $request){
        $nota = new App\Nota;
        $nota->nombre = $request->nombre;
        $nota->descripcion = $request->descripcion;
        $nota->save();
        return back()->with('mensaje','Nota registrada');
    }
}
