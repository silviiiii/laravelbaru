<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hobi extends Model
{
    protected $fillable = ['hobi'];
    public $timestamps = true;
    public function mahasiswa()
    {
    	return $this->belongsToMany('App\mahasiswa', 'mahasiswa_hobi', 'id_mahasiswa', 'id_hobi');
    }
}
