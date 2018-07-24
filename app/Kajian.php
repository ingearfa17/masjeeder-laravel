<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kajian extends Model
{
    public $table = "kajian";
    protected $fillable = ['id','tema_kajian','nama_ustad','lokasi_kajian','waktu'];
}
