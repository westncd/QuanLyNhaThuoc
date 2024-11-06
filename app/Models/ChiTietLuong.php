<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietLuong extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MaChiTiet',
        'MaBangLuong',
        'MoTa',
        'SoTien'
    ];
    
}
