<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Control1 extends Eloquent
{
	protected $connection = 'mongodb';
    protected $collection = 'biblioteca';

    protected $fillable = [
    	'titulo','anio','estado','asesor',
    	'autor'
    ];
}
