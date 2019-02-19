<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Personal extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'personal';

    protected $fillable = [
    	'codigo','nombres','apellidos','dni','area'
    ];
}
