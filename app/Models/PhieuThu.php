<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhieuThu extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MaPhieuThu',
        'MaHoaDon',
        'NgayLap',
        'NguoiLap',
        'SoTien'
    ];
    
}
