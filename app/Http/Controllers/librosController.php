<?php

namespace App\Http\Controllers;

use App\Models\LibroModel;
use Illuminate\Http\Request;
use App\Http\Controllers\appservice as ControllersAppservice;
use App\Models\ViewModels\Libros2;
use App\Providers\AppServiceProvider;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Http;


class librosController extends Controller
{
    public function privados_index(){
        $data = new ControllersAppservice();
        $data = $data->getAllBooks();
        return view('/libros_privados', compact('data'));
    }

    public function publicos_index(){
        $data = new ControllersAppservice();
        $data = $data->GetallApiBooks();
        return view('/libros_publicos', compact('data'));
    }

    public function create(Request $request){
        $appservice = new ControllersAppservice();
        $appservice->createBook($request);

        return back();

    }

    public function editar($id){
        $data = new ControllersAppservice();

        $data = $data->getBook($id);
        return view('eidcion', compact('data'));
    }

    public function editarlibro(Request $request){
        $data = new ControllersAppservice();

        if ($data->editBook($request)){
            return redirect('/librosP');
        } else{
            return "Hubo un error al guardar el libro";
        }
    }

    public function editarPublico($id){
        $data = new ControllersAppservice();

        $data = $data->getApiOneBook($id);
        return view('edicion_publica', compact('data'));
    }

    public function borrarlibro($id){
        $data = new ControllersAppservice();

        $data = $data->deleteBook($id);

        return back();
    }

    public function borrarPublico($id){
        $data = new ControllersAppservice();

        $newLibro = new Libros2();
        $newLibro->id = $id;
        $newLibro->nombre = '';
        $newLibro->desc = '';
        $newLibro->genero = '';

        $data = $data->deleteApiBook($newLibro);

        return back();
    }
}
