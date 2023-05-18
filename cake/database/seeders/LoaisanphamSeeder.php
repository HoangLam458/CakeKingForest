<?php

namespace Database\Seeders;

use App\Models\loaisanpham;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoaisanphamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loaisanpham::create(
            [
                'tenloaisp' => 'Bánh Kem Hương Bắp',
                'trangthai' => 1
            ]
        );
        Loaisanpham::create(
            [
                'tenloaisp' => 'Bánh Kem Doraemon',
                'trangthai' => 1
            ]
        );
        Loaisanpham::create(
            [
                'tenloaisp' => 'Bánh Kem Socola',
                'trangthai' => 1
            ]
        );
        Loaisanpham::create(
            [
                'tenloaisp' => 'Bánh Kem Sữa Tươi Vani',
                'trangthai' => 1
            ]
        );
        Loaisanpham::create(
            [
                'tenloaisp' => 'Bánh Kem Hũ Vàng',
                'trangthai' => 1
            ]
        );
        Loaisanpham::create(
            [
                'tenloaisp' => 'Bánh Kem Nhiều Tầng',
                'trangthai' => 1
            ]
        );
    }
}