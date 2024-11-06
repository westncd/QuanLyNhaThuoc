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
        Schema::create('chi_tiet_luong', function (Blueprint $table) {
            $table->id('MaChiTiet');
            $table->unsignedBigInteger('MaBangLuong');
            $table->string('MoTa');
            $table->decimal('SoTien', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_luongs');
    }
};
