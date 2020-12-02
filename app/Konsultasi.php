<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = "table_konsultasi";
    protected $fillable = ['id','peternak_id','dokter_id','pertanyaan','jawaban','status','created_at','update_at'];
}
