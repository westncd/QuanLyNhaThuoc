<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MaPhieuNhap',
        'NgayNhap',
        'MaThuoc',
        'TenThuoc',
        'SoLuong',
        'MaNhaCungCap'
    ];
    
}
