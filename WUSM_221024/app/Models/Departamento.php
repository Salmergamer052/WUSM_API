<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $connection = "mysql";
    protected $table = "departamento";
    protected $primarykey = "id_departamento";
    public $incrementing = true;
    public $timeslamps = false;
    
}
