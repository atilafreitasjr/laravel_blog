<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testecontroller extends Controller
{
    public function index($nome, $titulo = '') {
        return view('teste.index', ['nome'=>$nome, 'titulo'=>$titulo]); //chamando arquivo resources/views/index.blade.php
    }
    
    public function notas() {
        
        $notas = [
            0 => 'Anotação 1',
            1 => 'Anotação 2',
            2 => 'Anotação 3',
            3 => 'Anotação 4',
            4 => 'Anotação 5',
        ];
        
        //return view('teste.notas', ['notas' => $notas]);
        return view('teste.notas', compact('notas'));
    }
}
