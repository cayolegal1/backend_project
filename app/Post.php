<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function category(){

        return $this->belongsTo('App\Categories'); //obtiene todoslos registros de la tabla categories

    }
}
