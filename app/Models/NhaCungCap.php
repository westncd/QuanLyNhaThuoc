<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MaNhaCungCap',
        'TenNhaCungCap',
        'DiaChi',
        'SoDienThoai'
    ];
    
}
