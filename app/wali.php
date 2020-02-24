<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    protected $fillable=['nama','id_mahasiwa'];
    public $timestamps=true;
public function mahasiswa(){
    return $this->belongsTo('App\mahasiswa','id_mahasiswa');
}
}
