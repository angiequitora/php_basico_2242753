<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaReproduccion extends Model
{
    protected $table = "playlist";
    protected $primaryKey = "PlaylistId";
    public $timestamps = false;

    //RELACION M:m LISTAREPRODUCCION -> SUS CANCIONES
    public function canciones(){
        //beLongsToMany(muchos a muchos con pivote);
        //parametros: 1. El modelo a relacionar
        //            2. La tabla pivote
        //            3. FK del modelo actual en el pivote
        //            4. FK del modelo a relacionar en el pivote
        return $this->belongsToMany('App\Cancion', 
                            'playlisttrack',
                            'PlaylistId',
                            'TrackId'
                            );
    }
}
