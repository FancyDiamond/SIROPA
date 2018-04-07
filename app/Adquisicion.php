<?php

namespace Siropa;

use Illuminate\Database\Eloquent\Model;

class Adquisicion extends Model
{
    //
    protected $table = 'adquisicion';

    protected $fillable =['nombre_proyecto','numero_proyecto','region','localidad','direccion','nombre_empresa','municipio_id'];
}
