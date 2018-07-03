<?php

namespace sisventas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table  = "categoria";

    protected $primaryKey = "idcategoria";
    public $timestamps = false;

    //Datos guardables en el modelo
    protected $fillable = [
        'nombre',
        'descripcion',
        'condicion'
    ];

    //Datos no asignables al modelo
    protected $guarded = [

    ];

}
