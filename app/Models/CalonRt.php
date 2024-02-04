<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonRt extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function pemilih()
    {
        return $this->hasMany(DaftarPemilih::class);
    }
}
