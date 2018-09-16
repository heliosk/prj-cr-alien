<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
    use softDeletes;

    protected $table = 'eventos';

    protected $dates = ['deleted_at'];

    protected $fillable = ['cidade', 'estado', 'data'];
}
