<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MaHoaDon',
        'MaThuoc',
        'SoLuong',
        'ThanhTien'
    ];
    
}
