<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evento;

class EventController extends Controller
{
    public function index(){

        $eventos = Evento::all();

        return view('index',['eventos' => $eventos]);
    }

    public function criar(){
        return view('events.criar');
    }

    public function eventos(){
        return view('eventos');
    }

    public function store(Request $request){
        $evento = new Evento 
    }

    public function login(){
        return view('login');
    }

    public function cadastro(){
        return view('cadastro');
    }
}
