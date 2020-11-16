<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    protected $table="table_perawatan";
    protected $guarded = ['id'];

    public function Kategori(){
        return $this->belongsTo(\App\Categori::class, 'categoris_id', 'id');
    }

    public function getRouteKeyName(){
        return 'judul';
    }
}
