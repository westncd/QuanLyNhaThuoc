<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MaKhachHang',
        'TenKhachHang',
        'SoDienThoai',
        'DiaChi',
        'DiemTichLuy'
    ];
    
}
