<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';
/*
        protected $fillable = [
        'name', 'descricao',
    ];
*/
        protected $fillable = array('nome',
		 'descricao');
}
