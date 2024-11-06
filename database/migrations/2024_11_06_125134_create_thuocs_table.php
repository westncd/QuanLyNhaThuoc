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
        Schema::create('thuoc', function (Blueprint $table) {
            $table->id('MaThuoc');
            $table->string('TenThuoc');
            $table->string('NhomLoaiThuoc');
            $table->string('HangSanXuat');
            $table->date('HanSuDung');
            $table->integer('SoLuong');
            $table->decimal('Gia', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thuocs');
    }
};
