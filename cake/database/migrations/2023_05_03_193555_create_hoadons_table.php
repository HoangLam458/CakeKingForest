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
            $table->dateTime('ngaylaphd');
            $table->string('diachigiaohang',255);
            $table->string('sdtkhachhang',10);
            $table->string('hinhthucnhanhang',50);
            $table->date('ngaynhanhang');
            $table->string('phuongthucthanhtoan',20);
            $table->decimal('giatien');      
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
