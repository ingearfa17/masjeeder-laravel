<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  public $table = "event";
  protected $fillable = ['id','tema_event','lokasi_event','waktu_event'];
}
