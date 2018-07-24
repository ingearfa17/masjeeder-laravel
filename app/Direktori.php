<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direktori extends Model
{
  public $table = "direktori";
  protected $fillable = ['id','nama_masjid','lokasi_masjid'];
}
