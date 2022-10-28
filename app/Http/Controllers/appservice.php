<?php

namespace App\Http\Controllers;

use App\Models\LibroModel;
use App\Http\Controllers\dao as Dao;

class appservice extends Controller
{
    public function getLogin($request){
        $sus = new Dao();

        if($sus->logging($request)->count()>0){
            return true;
        }else{
            return false;
        }
    }

    public function getAllBooks(){
        $sus = new Dao();
        $sus = $sus->getBooks();

        $Listalibros = [];

        foreach($sus as $libro){
            $newLibro = new LibroModel();
            $newLibro->LibroId = $libro->id;
            $newLibro->LibroNombre = $libro->nombre;
            $newLibro->LibroDescripcion = $libro->desc;
            $newLibro->LibroGenero = $libro->genero;

            array_push($Listalibros, $newLibro);
        }

        return $Listalibros;
    }

}
