<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phieu_nhap', function (Blueprint $table) {
            $table->id('MaPhieuNhap');
            $table->date('NgayNhap');
            $table->unsignedBigInteger('MaThuoc');
            $table->string('TenThuoc');
            $table->integer('SoLuong');
            $table->unsignedBigInteger('MaNhaCungCap');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phieu_nhaps');
    }
};
