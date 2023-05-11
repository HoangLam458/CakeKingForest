<?php

namespace Database\Seeders;

use App\Models\sanpham;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanphamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Amazing Chocolate',
                'mota' => 'Thành phần: Bánh kem tươi cốt bánh 3 lớp chiffon sô cô la chip, kem nhân phô mai, phủ ganat đen và trang trí sô cô la màu.',
                'hinhanh' => 'Trong',
                'loaisanpham_id' => 3,
                'giatien' => 380000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Chocolate Lover',
                'mota' => 'Thành phần: Bánh kem tươi cốt bánh 3 lớp chiffon sô cô la chip, kem nhân phô mai, phủ ganat và trang trí sô cô la trắng.',
                'hinhanh' => 'Trong',
                'loaisanpham_id' => 3,
                'giatien' => 380000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Flower Fruit',
                'mota' => 'Thành phần: Bánh kem tươi cốt bánh 4 lớp chiffon hoa quả khô, nhân kem tươi, trang trí lá hương thảo và hoa quả tươi.',
                'hinhanh' => 'Trong',
                'loaisanpham_id' => 3,
                'giatien' => 380000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Love Melody 4',
                'mota' => 'Thành phần: Bánh kem tươi cốt bánh 3 lớp chiffon phô mai, trang trí kem và hoa quả tươi. ',
                'hinhanh' => 'Trong',
                'loaisanpham_id' => 1,
                'giatien' => 150000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Forever Love',
                'mota' => 'Thành phần: Bánh kem tươi cốt bánh 5 lớp chiffon sô cô la chip, kem nhân phô mai, trang trí cam sấy, sô cô la và bông đường bi bạc.',
                'hinhanh' => 'Trong',
                'loaisanpham_id' => 1,
                'giatien' => 380000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Cloudy Doraemon',
                'mota' => 'Bánh kem tươi cốt bánh chiffon phô mai, kem tươi nhân phô mai, trang trí phụ kiện hình Doraemon, sô cô la và bông đường bi bạc',
                'hinhanh' => 'Trong',
                'loaisanpham_id' => 4,
                'giatien' => 320000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh kem Pink Angel',
                'mota' => 'Bánh kem tươi cốt bánh chiffon phô mai, kem tươi nhân phô mai, trang trí phụ kiện búp bê thiên thần, sô cô la và bông đường bi bạc',
                'hinhanh' => 'Trong',
                'loaisanpham_id' => 4,
                'giatien' => 320000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'White Flower Cake SK',
                'mota' => 'Gateaux, kem sữa whipping, hạt đường decor',
                'hinhanh' => 'Trong',
                'loaisanpham_id' => 2,
                'giatien' => 520000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'EVENT CAKE E04 (HEART-SHAPED)',
                'mota' => 'bánh mini nhân kem mix: vanilla và chocolate',
                'hinhanh' => 'Trong',
                'loaisanpham_id' => 1,
                'giatien' => 720000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Romantic',
                'mota' => 'Thành phần: Bánh kem tươi cốt bánh 4 lớp chiffon trà bá tước, nhân kem tươi, trang trí sô cô la màu.',
                'hinhanh' => 'Trong',
                'loaisanpham_id' => 1,
                'giatien' => 320000,
                'trangthai' => 1
            ]
        );

    }
}