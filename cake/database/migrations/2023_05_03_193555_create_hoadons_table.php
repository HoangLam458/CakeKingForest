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
        Schema::create('hoadons', function (Blueprint $table) {
            $table->id();
            $table->string('mahd',10);
            $table->dateTime('ngaylaphd');
            $table->string('tenkhachhang',50)->nullable();
            $table->text('diachigiaohang')->nullable();
            $table->string('sdtkhachhang',10)->nullable();
            $table->string('hinhthucnhanhang',50)->nullable();
            $table->date('ngaynhanhang')->nullable();
            $table->string('phuongthucthanhtoan',20)->nullable();
            $table->integer('trangthai');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoadons');
    }
};
