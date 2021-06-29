<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
        protected $table = "genre";
        protected $primaryKey= "GenreId";
        public $timestamps = false;

        public function canciones(){
            //hasmany: tiene muchos

            //1. modelo a relacionar
            //2. FK del artista(papá) en los discos(hijo)
            return $this->hasMany('App\Cancion', 'GenreId');
        }
}

