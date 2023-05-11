<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class loaisanpham extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[]; 
    public function sanphams(){
        return $this->hasMany(sanpham::class);
    }
}
