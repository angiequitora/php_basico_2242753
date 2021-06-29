<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false;

    //1 M a Compras
    public function compras(){
        return $this->hasManyThrough('App\Compra' ,
                                     'App\Cliente',
                                     'SupportRepId',
                                     'CustomerId' ,
                                     'EmployeeId' ,
                                     'CustomerId'
                                    );
    }
    public function clientes(){
        //hasmany: parametros
        //1. Modelo a relacionar
        //2. FK del artista(papa) en los discos(hijo)
        return $this->hasMany('App\Cliente' ,'SupportRepId');
    }
}
