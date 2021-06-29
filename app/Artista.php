<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = "artist";
    protected $primaryKey="ArtistId";
    public $timestamps= false;

    //ESTABLECER RELACION 1 ARTISTA - M DISCOS
    public function discos(){
        //hasmany: tiene muchos

        //1. modelo a relacionar
        //2. FK del artista(papá) en los discos(hijo)
        return $this->hasMany('App\Disco', 'ArtistId');

    }


    //ESTABLECER RELACION 1 ARTISTA - M CANCION
    //hasManyThrough: establecer relacion 1 a M con tabla intermedia
    public function canciones(){
        return $this->hasManyThrough(/*PARAMETRO 1: Modelo Destino/TercerModelo/Nieto*/'App\Cancion',
                                    /*PARAMETRO 2: Modelo Intermedio/ SegundoModelo/Papá*/'App\Disco',
                                    /*PARAMETRO 3: FK del modelo 1 en, el modelo 2*/'ArtistId',
                                    /*PARAMETRO 4: FK del modelo 2 en el modelo3*/'AlbumId',
                                    /*PARAMETRO 5: PK modelo 1*/ 'ArtistId',
                                    /*PARAMETRO 6: PK del modelo 2*/'AlbumId');
    }
}
