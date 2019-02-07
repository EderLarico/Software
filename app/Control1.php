<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Control1 extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'controles';
    
    protected $fillable = [
        'jefeInformatica', 'comiteResponsable','cargo','sedeOrganizacion','area',
        'responsableArea','sistema','politicasAcceso','usuarios','perfil','apellidosNombres'
    ];
}
