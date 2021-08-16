<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkDaftar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function link_daftars(){
        return $this->hasMany(LinkDaftar::class);
    }
}
