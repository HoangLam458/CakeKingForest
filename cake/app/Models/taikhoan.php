<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class taikhoan extends Model
{
    use HasFactory;
    use softDeletes;

    protected $guarded=[]; 
    public function hoadons(){
        return $this->hasMany(hoadon::class);
    }
}