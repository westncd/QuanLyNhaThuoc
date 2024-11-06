<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BangLuong extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MaBangLuong',
        'MaNhanVien',
        'Thang',
        'LuongCoBan',
        'ThuongChuyenCan',
        'ThuongKPI',
        'SoNgayNghi',
        'TongLuong'
    ];
    
}
