<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    //nomenclatura do método: verbo html (get/post) e o nome. A cada letra maiúscula, a url é separada por traços. Ex: método getExemploSuper, a url fica /exemplo-super
    public function getLogin(){
        $data = [
            'email' => 'clayton@gmail.com',
            'password' => 123456
        ];
        if(Auth::attempt($data)){
            return "logou";
        }
        if(Auth::check()){
            return "Logado";
        }

        Auth::user();

        return "Falhou";
    }

    public function getLogout(){
        Auth::logout();
        if(Auth::check()){
            return "Logado";
        }
        return "Não está logado";
    }

    public function postExemplo(){
        return "Tchau";
    }
}
