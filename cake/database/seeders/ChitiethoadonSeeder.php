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
                'giabanh' => 390000,
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
                'giabanh' => 420000,
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
                'giabanh' => 462000,
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
                'giabanh' => 420000,
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
                'giabanh' => 630000,
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
                'giabanh' => 600000,
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
                'giabanh' => 550000,
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
                'giabanh' => 605000,
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
                'giabanh' => 660000,
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
                'giabanh' => 660000,
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
                'giabanh' => 446250,
                'hoadon_id' => 5,
                'size_id' => 2,
                'sanpham_id' => 17,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '2',
                'ghichu' => NULL,
                'giatien' => 900000,
                'giabanh' => 450000,
                'hoadon_id' => 5,
                'size_id' =>1,
                'sanpham_id' =>3,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '2',
                'ghichu' => NULL,
                'giatien' => 900000,
                'giabanh' => 450000,
                'hoadon_id' => 6,
                'size_id' =>1,
                'sanpham_id' =>3,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => NULL,
                'giatien' => 350000,
                'giabanh' => 350000,
                'hoadon_id' => 6,
                'size_id' =>1,
                'sanpham_id' =>4,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '2',
                'ghichu' => NULL,
                'giatien' => 1000000,
                'giabanh' => 500000,
                'hoadon_id' => 6,
                'size_id' =>1,
                'sanpham_id' =>6,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => NULL,
                'giatien' => 600000,
                'giabanh' => 600000,
                'hoadon_id' => 6,
                'size_id' =>1,
                'sanpham_id' =>9,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => NULL,
                'giatien' => 1600000,
                'giabanh' => 1600000,
                'hoadon_id' => 7,
                'size_id' =>1,
                'sanpham_id' =>25,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => NULL,
                'giatien' => 1600000,
                'giabanh' => 1600000,
                'hoadon_id' => 8,
                'size_id' =>1,
                'sanpham_id' =>25,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => NULL,
                'giatien' => 1600000,
                'giabanh' => 1600000,
                'hoadon_id' => 9,
                'size_id' =>1,
                'sanpham_id' =>25,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => NULL,
                'giatien' => 1500000,
                'giabanh' => 1500000,
                'hoadon_id' => 10,
                'size_id' =>1,
                'sanpham_id' =>24,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '5',
                'ghichu' => NULL,
                'giatien' => 5000000,
                'giabanh' => 1000000,
                'hoadon_id' => 11,
                'size_id' =>1,
                'sanpham_id' =>23,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '5',
                'ghichu' => NULL,
                'giatien' => 3500000,
                'giabanh' => 700000,
                'hoadon_id' => 12,
                'size_id' =>1,
                'sanpham_id' =>20,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => 'Tên Hoàng Sang 6 Tuổi',
                'giatien' => 600000,
                'giabanh' => 600000,
                'hoadon_id' => 12,
                'size_id' =>1,
                'sanpham_id' =>19,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => 'Tên Hoàng Lan 20 Tuổi',
                'giatien' => 455000,
                'giabanh' => 455000,
                'hoadon_id' => 13,
                'size_id' =>1,
                'sanpham_id' =>13,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => 'Tên Ánh Ngọc - 2 Tuổi',
                'giatien' => 435000,
                'giabanh' => 435000,
                'hoadon_id' => 14,
                'size_id' =>1,
                'sanpham_id' =>14,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => 'Tên Huỳnh Hào 21 Tuổi',
                'giatien' => 400000,
                'giabanh' => 400000,
                'hoadon_id' => 15,
                'size_id' =>1,
                'sanpham_id' =>15,
            ]
        );
        Chitiethoadon::create(
            [
                'soluong' => '1',
                'ghichu' => 'Tên Huỳnh Hào 21 Tuổi',
                'giatien' => 400000,
                'giabanh' => 400000,
                'hoadon_id' => 16,
                'size_id' =>1,
                'sanpham_id' =>15,
            ]
        );
    }
}
