<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thuoc extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MaThuoc',
        'TenThuoc',
        'NhomLoaiThuoc',
        'HangSanXuat',
        'HanSuDung',
        'SoLuong',
        'Gia'
    ]; 
}
