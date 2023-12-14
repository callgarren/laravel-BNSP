<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;
use App\InputAspirasi;

class Aspirasi extends Model
{
    protected $table = "aspirasi";

    protected $fillable = ['status','feedback'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function feedback(){
        return $this->belongsTo(InputAspirasi::class,'id');
    }
}
