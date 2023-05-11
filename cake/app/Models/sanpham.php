<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sanpham extends Model
{
    use HasFactory;
    use softDeletes;

    protected $guarded=[]; 
    public function loaisanphams(){
        return $this->belongsTo(loaisanpham::class);
    }
}