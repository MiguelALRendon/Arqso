<?php

namespace App\Http\Controllers;

use App\Models\LibroModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\appservice as ControllersAppservice;


class librosController extends Controller
{
    public function privados_index(){
        $data = new ControllersAppservice();
        $data = $data->getAllBooks();
        return view('/libros_privados', compact('data'));
    }

    public function create(Request $request){
        $libro = new LibroModel();

        $libro->nombre = $request->nombre;
        $libro->desc = $request->desc;
        $libro->genero = $request->genero;

        $libro->save();

        return back();

    }

    public function editar($id){
        $libro = LibroModel::find($id);
        return view('eidcion', compact('libro'));
    }

    public function editarlibro(Request $request){
        $libro = LibroModel::find($request->id);
        $libro->nombre = $request->nombre;
        $libro->desc = $request->desc;
        $libro->genero = $request->genero;
        $libro->save();

        return redirect('/librosP');
    }

    public function borrarlibro($id){
        $libro = LibroModel::find($id);
        $libro->delete();

        return back();
    }
}
