<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'id', 'title', 'description'
    ];
}
