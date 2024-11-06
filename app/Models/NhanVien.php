<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MaNhanVien',
        'HoTen',
        'NgaySinh',
        'DiaChi',
        'SoDienThoai'
    ];
    
}
