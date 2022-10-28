<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\ViewModels\Libros2;

class dao extends Controller
{
    public function logging($request){
        $sus = UserModel::where('nombre', $request->nombre)->where('pass', $request->pass)->get();
        return $sus;
    }

    public function getBooks(){
        $libros = Libros2::all();
        return $libros;
    }
}
