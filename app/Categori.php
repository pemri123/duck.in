<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Categori extends Model
{
    protected $table='table_categoris';
    protected $guarded = ['id'];

    public function setSlugAttribute($value){
    $this->attributes['slug'] = Str::slug($value,'-');
    }
    
    public function getRouteKeyName(){
        return 'slug';
    }

    public function Perawatan(){
        return $this->hasMany(\App\Perawatan::class, 'categoris_id', 'id');
    }
}
