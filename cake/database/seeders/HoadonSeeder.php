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
                'ngaylaphd' => '2023-05-15 00:00:00',
                'tenkhachhang' => 'Huỳnh Hào',
                'diachigiaohang' => '64 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Trực Tiếp Tại Cửa Hàng',
                'ngaynhanhang'=>'2023-04-23',
                'phuongthucthanhtoan'=>'Tiền Mặt',
                'trangthai'=>'4',
                'users_id'=>2
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD002',
                'ngaylaphd' => '2023-05-16 00:00:00',
                'tenkhachhang' => 'Hoàng Lâm',
                'diachigiaohang' => '43 An Bình P6, Quận 5, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-05-20',
                'phuongthucthanhtoan'=>'MoMo',
                'trangthai'=>'1',
                'users_id'=>1
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD003',
                'ngaylaphd' => '2023-04-25 00:00:00',
                'tenkhachhang' => 'Nguyễn Ngân',
                'diachigiaohang' => '110 trần hưng đạo Quận 1',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-04-27',
                'phuongthucthanhtoan'=>'VnPay',
                'trangthai'=>'4',
                'users_id'=>3
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD004',
                'ngaylaphd' => '2023-05-01 00:00:00',
                'tenkhachhang' => 'Hải',
                'diachigiaohang' => '210 Huỳnh Mẫn Đạt Quận 5',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-05-05',
                'phuongthucthanhtoan'=>'Tiền Mặt',
                'trangthai'=>'5',
                'users_id'=>4
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD005',
                'ngaylaphd' => '2023-05-19 00:00:00',
                'tenkhachhang' => 'Trần Bình',
                'diachigiaohang' => '65 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-05-25',
                'phuongthucthanhtoan'=>'MoMo',
                'trangthai'=>'3',
                'users_id'=>5
            ]
        );
    }
}
