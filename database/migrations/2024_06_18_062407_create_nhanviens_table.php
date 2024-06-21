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
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->id();
            $table->string('MaNV');
            $table->string('TenNV');
            $table->string('GioiTinh');
            $table->date('NgaySinh');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhanviens');
    }
};
