<?php

namespace Ortoclear;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

    protected $fillable = ['name', 'avatar', 'cargo', 'email', 'password'];
    //
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
