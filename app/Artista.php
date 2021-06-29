<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

    //ESTABLECER RELACION 1 ARTISTA - M DISCOS
    public function bailables(){
        //hasmany: parametros
        //1. Modelo a relacionar
        //2. FK del artista(papa) en los discos(hijo)
        return $this->hasMany('App\Disco' ,'ArtistId');
    }

    //ESTABLECER RELACION 1 ARTISTA -M CANCION
    public function canciones(){
        //hasManyThrough: Establecer relacion 1 M con tebla intermedia
        //parametro 1: Modelo Destino - tercer modelo
        //parametro 2: Modelo Intermedio - segundo modelo
        //parametro 3: FK del modelo 1 en el modelo 2
        //parametro 4: FK del modelo 2 en el modelo 3
        //parametro 5: PK del modelo 1
        //parametro 6: PK del modelo 2
        return $this->hasManyThrough('App\Cancion', 'App\Disco', 'ArtistId', 'AlbumId', 'ArtistId','AlbumId');
    }
}
