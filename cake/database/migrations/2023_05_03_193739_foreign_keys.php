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

        
        Schema::table('hoadons', function (Blueprint $table) {
            $table->foreignId('users_id')->nullable()->constrained();
        });

        Schema::table('chitiethoadons', function (Blueprint $table) {
            $table->foreignId('hoadon_id')->constrained();
        });

        Schema::table('chitiethoadons', function (Blueprint $table) {
            $table->foreignId('size_id')->constrained();
        });

        Schema::table('chitiethoadons', function (Blueprint $table) {
            $table->foreignId('sanpham_id')->constrained();
        });

        Schema::table('sanphams', function (Blueprint $table) {
            $table->foreignId('loaisanpham_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
