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
        Schema::create('phieu_thu', function (Blueprint $table) {
            $table->id('MaPhieuThu');
            $table->unsignedBigInteger('MaHoaDon');
            $table->date('NgayLap');
            $table->string('NguoiLap');
            $table->decimal('SoTien', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phieu_thus');
    }
};
