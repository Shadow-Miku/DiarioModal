<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorDiario;

class controladorVistas extends Controller
{
    //aqui van nuestras funciones -  controlador basico - controlador personalizado
    
/*    public function procesarRecuerdo(Request $req){
        return 'Su recuerdo esta siendo procesado';
        //return $req->all();
        //return $req->path(); //se ve la ruta
        //return $req->url(); //se ve la url
        //return $req->ip(); //se ve la ip
    }*/ 

    public function procesarRecuerdo(ValidadorDiario $req){
        return redirect('Registrar')->with('confirmacion','Llegocorrecto');
    }

    public function showWelcome(){
        return view('welcome');
    }

    public function showHome(){
        return view('Home');
    } 

    public function showIngresar(){
        return view('Registrar');
    } 

    public function showRecuerdos(){
        return view('Recuerdo');
    } 

}
