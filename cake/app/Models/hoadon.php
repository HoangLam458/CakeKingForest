<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class hoadon extends Model
{
    use HasFactory;

    protected $guarded=[]; 
    public function chitiethoadons(){
        return $this->belongsTo(chitiethoadon::class);
    }

    public function taikhoans(){
        return $this->belongsTo(taikhoan::class);
    }
}
