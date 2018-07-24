<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    public $table = "quotes";
    protected $fillable = ['id','gambar','deskripsi_gambar'];
}
