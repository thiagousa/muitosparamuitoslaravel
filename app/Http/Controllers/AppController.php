<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\funcionarios;
use App\Funcoes;

class AppController extends Controller
{
    public function index()
    {

        return 'Estou Aqui';
    }

    /**
     * @return mixed
     */
    public function funcionarios($i)
    {
        $funcionario = funcionarios::find($i);
        $funcoes = $funcionario->funcoes;

         echo '<h1>'.$funcionario->nome.'</h1>';
         echo '<br>';
        echo '<ul>';
         foreach ($funcoes as $f){
             echo '<li>'.$f->funcao.'</li>';


         }
        echo '</ul>';
    }

    public function funcoes($i)
    {
        $funcao = funcoes::find($i);
        $funcionarios = $funcao->funcionarios;

        echo '<h1>' . $funcao->funcao . '</h1>';
        echo '<br>';
        echo '<ul>';
        foreach ($funcionarios as $f) {
            echo '<li>' . $f->nome . '</li>';


        }
    }
}
