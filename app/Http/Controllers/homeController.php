<?php

namespace App\Http\Controllers;

use App\Http\Controllers\appservice as ControllersAppservice;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function login(Request $request){
        $user = new ControllersAppservice();

        if ($user->getLogin($request)){
            return redirect('/librosP');
        }
    }

   /* public function registrar(Request $request){
        $reg = new UserModel();

        $reg->nombre = $request->nombre;
        $reg->pass = $request->pass;

        $reg->save();

        return redirect('/');
    }*/
}
