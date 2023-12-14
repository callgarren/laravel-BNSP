<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aspirasi;
use App\InputAspirasi;

class Kategori extends Model
{
    protected $table = "kategori";

    protected $fillable = ['ket_kategori'];

    public function aspirasi(){
        return $this->hasMany(Aspirasi::class);
    }

    public function inputaspirasi(){
        return $this->hasMany(InputAspirasi::class);
    }
}
