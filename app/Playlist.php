<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = "playlist";
    protected $primaryKey="PlaylistId";
    public $timestamps= false;


    //RELACION N:M ListaReproduccion -> sus canciones

    public function canciones(){
        //belongsToMany(muchos a muchos con pivote (tabla intermedia))

        //parametros:
       return $this->belongsToMany('App\Cancion',
                              'playlisttrack',
                              'PlaylistId',
                              'TrackId'
                            );
    }


}
