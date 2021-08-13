<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasDeskripsi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kelas_deskripsi(){
        return $this->hasMany(KelasDeskripsi::class);
    }
}
