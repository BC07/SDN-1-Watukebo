<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriTentang extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function galeri_tentangs(){
        return $this->hasMany(GaleriTentang::class);
    }
}
