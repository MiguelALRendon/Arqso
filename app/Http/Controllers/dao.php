<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\ViewModels\Libros2;
use Illuminate\Support\Facades\Http;
use Exception;

class dao extends Controller
{
    protected $URL = 'localhost/rest-api-php-mysql/items/';

    public function logging($request){
        $sus = UserModel::where('nombre', $request->nombre)->where('pass', $request->pass)->get();
        return $sus;
    }

    public function createBook(Request $request){
        $libro = new Libros2();

        $libro->nombre = $request->nombre;
        $libro->desc = $request->desc;
        $libro->genero = $request->genero;

        $libro->save();
    }

    public function getBooks(){
        $libros = Libros2::all();
        return $libros;
    }

    public function getBook($id){
        $libro = Libros2::find($id);
        return $libro;
    }

    public function editBook(Request $request){
        try {
            $libro = Libros2::find($request->id);
            $libro->nombre = $request->nombre;
            $libro->desc = $request->desc;
            $libro->genero = $request->genero;
            $libro->save();

            return true;
        } catch (Exception $e){
            return false;
        }
    }

    public function delete($id){
        $libro = Libros2::find($id);
        $libro->delete();
    }

    public function getAllApiBooks(){
        $data = HTTP::get($this->URL.'read.php');
        return $data;
    }

    public function getApiOneBook($id){
        $data = HTTP::get($this->URL.'read.php?id='.$id);
        return $data;
    }

    public function deleteApiBook($id){
        $data = HTTP::withBody(json_encode($id), 'application/json')->delete($this->URL.'delete.php');
        return $data;
    }
}
