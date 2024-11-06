<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MaHoaDon',
        'NgayLap',
        'MaKhachHang',
        'MaNhanVien'
    ];
    
}
