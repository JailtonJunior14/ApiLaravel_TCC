<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cidade extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'cidade';

    protected $filltable = ['nome', 'id_estado'];

    function estados()
    {
        return $this->belongsTo(Estado::class);
    }
}
