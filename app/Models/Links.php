<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;

    protected $table = 'link';
    protected $fillable = ['link', 'id_prestador', 'id_empresa'];

    public $timestamps = false;
}
