<?php

namespace Database\Seeders;

use App\Models\hoadon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HoadonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hoadon::create(
            [
                'mahd' => 'HD001',
                'ngaylaphd' => '15/5/20232',
                'tenkhachhang' => 'Huỳnh Hào',
                'diachigiaohang' => '64 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Trực Tiếp Tại Cửa Hàng',
                'ngaynhanhang'=>'17/5/2023',
                'phuongthucthanhtoan'=>'Tiền Mặt',
                'trangthai'=>'4',
                'taikhoan_id'=>2
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD002',
                'ngaylaphd' => '16/5/2023',
                'tenkhachhang' => 'Hoàng Lâm',
                'diachigiaohang' => '43 An Bình P6, Quận 5, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'20/5/2023',
                'phuongthucthanhtoan'=>'MoMo',
                'trangthai'=>'1',
                'taikhoan_id'=>1
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD003',
                'ngaylaphd' => '25/4/2023',
                'tenkhachhang' => 'Nguyễn Ngân',
                'diachigiaohang' => '110 trần hưng đạo Quận 1',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'27/4/2023',
                'phuongthucthanhtoan'=>'VnPay',
                'trangthai'=>'4',
                'taikhoan_id'=>3
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD004',
                'ngaylaphd' => '01/5/2023',
                'tenkhachhang' => 'Hải',
                'diachigiaohang' => '210 Huỳnh Mẫn Đạt Quận 5',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'5/5/2023',
                'phuongthucthanhtoan'=>'Tiền Mặt',
                'trangthai'=>'5',
                'taikhoan_id'=>4
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD005',
                'ngaylaphd' => '19/5/2023',
                'tenkhachhang' => 'Trần Bình',
                'diachigiaohang' => '65 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'25/5/2023',
                'phuongthucthanhtoan'=>'MoMo',
                'trangthai'=>'3',
                'taikhoan_id'=>5
            ]
        );
    }
}