<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{

    public function funcoes(){

        return $this->belongsToMany('App\Funcoes','funcionarios_funcoes','id_funcionario','id_funcao');
    }
}
