<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;
use App\Aspirasi;

class InputAspirasi extends Model
{
    protected $table = "input_aspirasi";

    protected $fillable = ['nik','lokasi','ket','kategori_id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function aspirasi(){
        return $this->hasOne(Aspirasi::class,'id');
    }
}
