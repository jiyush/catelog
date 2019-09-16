<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'category','phone', 'address', 'state','city', 'street','description', 'products', 'webiste'
    ];
}
