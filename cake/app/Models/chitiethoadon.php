<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class chitiethoadon extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[]; 
    public function hoadons(){
        return $this->hasMany(hoadon::class);
    }

    public function sizes(){
        return $this->hasOne(size::class);
    }

    public function sanphams(){
        return $this->hasOne(sanpham::class);
    }

}