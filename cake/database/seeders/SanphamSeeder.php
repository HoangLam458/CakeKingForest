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
                'tensp' => 'Bánh Kem Bắp BT116',
                'mota' => 'Bánh Kem Bắp Nhân Phomai Cao Cấp tại bánh kem ngon với hương vị bánh nhẹ nhàng cốt bánh mềm mịn không gây cảm giác ngấy hệ thống bánh kem ngon nhận giao hàng tại thành phố Hcm.',
                'hinhanh' => 'images/KEMBAP-BT116.png',
                'loaisanpham_id' => 1,
                'giatien' => 400000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp BT111',
                'mota' => 'Bánh Kem Bắp Nhân Phomai Cao Cấp tại bánh kem ngon với hương vị bánh nhẹ nhàng cốt bánh mềm mịn không gây cảm giác ngấy hệ thống bánh kem ngon nhận giao hàng tại thành phố Hcm.',
                'hinhanh' => 'images/KEMBAP-BT111.png',
                'loaisanpham_id' => 1,
                'giatien' => 390000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp BT106',
                'mota' => 'Bánh Kem Bắp Nhân Phomai Cao Cấp tại bánh kem ngon với hương vị bánh nhẹ nhàng cốt bánh mềm mịn không gây cảm giác ngấy hệ thống bánh kem ngon nhận giao hàng tại thành phố Hcm.',
                'hinhanh' => 'images/KEMBAP-BT106.png',
                'loaisanpham_id' => 1,
                'giatien' => 450000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp BT108',
                'mota' => 'Bánh Kem Bắp Nhân Phomai Cao Cấp tại bánh kem ngon với hương vị bánh nhẹ nhàng cốt bánh mềm mịn không gây cảm giác ngấy hệ thống bánh kem ngon nhận giao hàng tại thành phố Hcm.',
                'hinhanh' => 'images/KEMBAP-BT108.png',
                'loaisanpham_id' => 1,
                'giatien' => 350000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp BT79',
                'mota' => 'Bánh Kem Bắp Nhân Phomai Cao Cấp tại bánh kem ngon với hương vị bánh nhẹ nhàng cốt bánh mềm mịn không gây cảm giác ngấy hệ thống bánh kem ngon nhận giao hàng tại thành phố Hcm.',
                'hinhanh' => 'images/KEMBAP-BT79.png',
                'loaisanpham_id' => 1,
                'giatien' => 420000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON - AR99',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/DOREMON-AR99.png',
                'loaisanpham_id' => 2,
                'giatien' => 500000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON - AR100',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/DOREMON-AR100.png',
                'loaisanpham_id' => 2,
                'giatien' => 550000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON - AR82',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/DOREMON-AR82.png',
                'loaisanpham_id' => 2,
                'giatien' => 580000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON - AR52',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/DOREMON-AR52.png',
                'loaisanpham_id' => 2,
                'giatien' => 600000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem ST299',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/VANI-ST299.png',
                'loaisanpham_id' => 4,
                'giatien' => 440000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem ST294',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/VANI-ST294.png',
                'loaisanpham_id' => 4,
                'giatien' => 420000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem ST270',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/VANI-ST270.png',
                'loaisanpham_id' => 4,
                'giatien' => 460000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem ST291',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/VANI-ST291.png',
                'loaisanpham_id' => 4,
                'giatien' => 455000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA S16',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/SOCOLA-S16.png',
                'loaisanpham_id' => 3,
                'giatien' => 435000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA S25',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/SOCOLA-S25.png',
                'loaisanpham_id' => 3,
                'giatien' => 400000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA S05',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/SOCOLA-S05.png',
                'loaisanpham_id' => 3,
                'giatien' => 395000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA S04',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/SOCOLA-S04.png',
                'loaisanpham_id' => 3,
                'giatien' => 425000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng V98',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/HUVANG-V98.png',
                'loaisanpham_id' => 5,
                'giatien' => 650000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng V68',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/HUVANG-V68.png',
                'loaisanpham_id' => 5,
                'giatien' => 600000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng V32',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/HUVANG-V32.png',
                'loaisanpham_id' => 5,
                'giatien' => 700000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng V31',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/HUVANG-V31.png',
                'loaisanpham_id' => 5,
                'giatien' => 750000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Tiramisu V31',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/HUVANG-V31.png',
                'loaisanpham_id' => 5,
                'giatien' => 750000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng T30',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/TANG-T30.png',
                'loaisanpham_id' => 6,
                'giatien' => 1000000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng T25',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/TANG-T25.png',
                'loaisanpham_id' => 6,
                'giatien' => 1500000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng T08',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/TANG-T08.png',
                'loaisanpham_id' => 6,
                'giatien' => 1600000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng T05',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/TANG-T05.png',
                'loaisanpham_id' => 6,
                'giatien' => 1300000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng T07',
                'mota' => 'Chưa có',
                'hinhanh' => 'images/TANG-T07.png',
                'loaisanpham_id' => 6,
                'giatien' => 1000000,
                'trangthai' => 1
            ]
        );
    }
}