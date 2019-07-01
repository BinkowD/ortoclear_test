<?php

namespace Ortoclear;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function user(){
        return $this->belongsToMany('Ortoclear\User');
    }
}
