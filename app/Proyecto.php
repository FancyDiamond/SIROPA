<?php

namespace Siropa;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table = 'proyecto';

    protected $fillable = ['nombre_proyecto','numero_proyecto','region','localidad','direccion','nombre_constructora','municipio_id','cargo','telefono','email','fecha_inicio','fecha_fin'];
}
