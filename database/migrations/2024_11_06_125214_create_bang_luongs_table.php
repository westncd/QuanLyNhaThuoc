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
        Schema::create('bang_luong', function (Blueprint $table) {
            $table->id('MaBangLuong');
            $table->unsignedBigInteger('MaNhanVien');
            $table->date('Thang');
            $table->decimal('LuongCoBan', 10, 2);
            $table->decimal('ThuongChuyenCan', 10, 2);
            $table->decimal('ThuongKPI', 10, 2);
            $table->integer('SoNgayNghi');
            $table->decimal('TongLuong', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bang_luongs');
    }
};
