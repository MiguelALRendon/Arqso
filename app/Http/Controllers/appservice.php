<?php

namespace App\Http\Controllers;

use App\Models\LibroModel;
use App\Http\Controllers\dao as Dao;
use Illuminate\Http\Request;

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

    public function createBook(Request $request){
        $dao = new Dao();
        $dao->createBook($request);
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

    public function getBook($id){
        $sus = new Dao();
        $sus = $sus->getBook($id);

        $Libro = new LibroModel();

        $Libro->LibroId = $sus->id;
        $Libro->LibroNombre = $sus->nombre;
        $Libro->LibroDescripcion = $sus->desc;
        $Libro->LibroGenero = $sus->genero; 

        return $Libro;
    }

    public function editBook(Request $request){
        $sus = new Dao();

        return $sus->editBook($request);
    }

    public function deleteBook($id){
        $sus = new Dao();

        $sus = $sus->delete($id);
    }

    public function GetallApiBooks(){
        $dao = new Dao();
        $dao = $dao->getAllApiBooks();

        $Listalibros = [];

        foreach($dao['items'] as $libro){
            $newLibro = new LibroModel();
            $newLibro->LibroId = $libro['id'];
            $newLibro->LibroNombre = $libro['nombre'];
            $newLibro->LibroDescripcion = $libro['desc'];
            $newLibro->LibroGenero = $libro['genero'];

            array_push($Listalibros, $newLibro);
        }

        return $Listalibros;
    }
    
    public function getApiOneBook($id){
        $sus = new Dao();
        $sus = $sus->getApiOneBook($id)['items'][0];

        $Libro = new LibroModel();

        $Libro->LibroId = $sus['id'];
        $Libro->LibroNombre = $sus['nombre'];
        $Libro->LibroDescripcion = $sus['desc'];
        $Libro->LibroGenero = $sus['genero']; 

        return $Libro;
    }

    public function deleteApiBook($id){
        $sus = new Dao();
        
        return $sus->deleteApiBook($id);
    }

}
