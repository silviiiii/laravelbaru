<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $fillable=['nama','nim'];
    public $timestamps=true;
public function mahasiswa(){
    return $this->belongsTo('App\mahasiswa','id_dosen');
}
}
