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
                'tenloaisp' => 'Bánh Sinh Nhật',
                'trangthai' => 1
            ]
        );
        Loaisanpham::create(
            [
                'tenloaisp' => 'Bánh Sự Kiện',
                'trangthai' => 1
            ]
        );
        Loaisanpham::create(
            [
                'tenloaisp' => 'Bánh Thường',
                'trangthai' => 1
            ]
        );
        Loaisanpham::create(
            [
                'tenloaisp' => 'Bánh Trẻ Em',
                'trangthai' => 1
            ]
        );
    }
}