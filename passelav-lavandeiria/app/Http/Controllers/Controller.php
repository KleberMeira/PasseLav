<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return view('user.home');
    }

    public function promocoes(){
        return view('user.promocoes');
    }

    public function servicos(){
        return view('user.servicos');
    }

    public function contato(){
        return view('user.contato');
    }

    public function sobre(){
       return view('user.sobre');
    }
}
