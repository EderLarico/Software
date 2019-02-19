<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Estudiante extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'estudiante';

    protected $fillable = [
    	'codigo','nombres','apellidos','dni','curso','estado'
    ];
}
