<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Administrador extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'administrador';

    protected $fillable = [
    	'codigo','nombres','apellidos','email','dni'
    ];
}
