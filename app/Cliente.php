<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    protected $table = "customer";
    protected $primaryKey= "CustomerId";
    public $timestamps = false;

    //RELACION 1:M con COMPRA

    public function compras(){
        return $this-> HasMany('App\Compra', 'CustomerId');
    }
}
