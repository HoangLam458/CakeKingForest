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
        Schema::create('sanphams', function (Blueprint $table) {
            $table->id();
            $table->string('tensp',255);
            $table->string('mota',300);
            $table->string('hinhanh1',255);
            $table->string('hinhanh2',255);
            $table->string('hinhanh3',255);
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
        Schema::dropIfExists('sanphams');
    }
};
