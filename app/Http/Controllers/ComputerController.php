<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function consultaAprendiz(){
        $compu = Computer::find(3);
        return $compu->aprendices;
    }

    public function create (){
        
     return view('computer.create');


    }

    public function store(Request $request){

    $compu = new Computer();

     $compu=Computer::create($request->all());

    return $compu;



    }

}
