<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coworking extends Model
{
    public $table = "coworking";
    protected $fillable = ['id','coworking'];
}
