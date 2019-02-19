<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'docente';

    protected $fillable = [
    	'codigo','nombres','apellidos','dni','curso','estado','tesis'
    ];
}
