<?php

namespace Database\Seeders;

use App\Models\chitiethoadon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChitiethoadonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chitiethoadon::create(
            [
                'soluong' => '2',
                'ghichu' => null,
                'giatien' => 780000,
                'hoadon_id' => 1,
                'size_id' => 1,
                'sanpham_id' => 2,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => null,
                'giatien' => 420000,
                'hoadon_id' => 1,
                'size_id' => 2,
                'sanpham_id' => 1,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => 'Tên Hoàng Lâm 21 Tuổi',
                'giatien' => 462000,
                'hoadon_id' => 2,
                'size_id' => 3,
                'sanpham_id' => 5,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => 'Tên Hoàng Lâm 21 Tuổi',
                'giatien' => 462000,
                'hoadon_id' => 2,
                'size_id' => 3,
                'sanpham_id' => 5,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '2',
                'ghichu' => null,
                'giatien' => 840000,
                'hoadon_id' => 2,
                'size_id' => 1,
                'sanpham_id' => 11,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => null,
                'giatien' => 630000,
                'hoadon_id' => 2,
                'size_id' => 2,
                'sanpham_id' => 19,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => null,
                'giatien' => 600000,
                'hoadon_id' => 3,
                'size_id' => 1,
                'sanpham_id' => 19,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '3',
                'ghichu' => null,
                'giatien' => 1650000,
                'hoadon_id' => 3,
                'size_id' => 1,
                'sanpham_id' => 7,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => null,
                'giatien' => 605000,
                'hoadon_id' => 4,
                'size_id' => 3,
                'sanpham_id' => 7,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '2',
                'ghichu' => null,
                'giatien' => 1320000,
                'hoadon_id' => 4,
                'size_id' => 3,
                'sanpham_id' => 9,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '3',
                'ghichu' => null,
                'giatien' => 1320000,
                'hoadon_id' => 5,
                'size_id' => 3,
                'sanpham_id' => 15,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => null,
                'giatien' => 446250,
                'hoadon_id' => 5,
                'size_id' => 2,
                'sanpham_id' => 17,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '2',
                'ghichu' => 'Họ Tên Trần Bình, 22 Tuổi',
                'giatien' => 900000,
                'hoadon_id' => 5,
                'size_id' =>1,
                'sanpham_id' =>3,
            ]
        );
    }
}