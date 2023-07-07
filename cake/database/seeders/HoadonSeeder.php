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
                'mahd' => 'HD1XKF4',
                'ngaylaphd' => '2022-07-25',
                'tenkhachhang' => 'Huỳnh Hào',
                'diachigiaohang' => '64 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Trực Tiếp Tại Cửa Hàng',
                'ngaynhanhang'=>'2022-07-28',
                'phuongthucthanhtoan'=>'Tiền Mặt',
                'trangthai'=>'4',
                'users_id'=>2
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD2PODA',
                'ngaylaphd' => '2023-07-07',
                'tenkhachhang' => 'Hoàng Lâm',
                'diachigiaohang' => '43 An Bình P6, Quận 5, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-08',
                'phuongthucthanhtoan'=>'MoMo',
                'magiaodich'=> '123456789',
                'trangthai'=>'2',
                'users_id'=>1
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD3KHCA',
                'ngaylaphd' => '2023-07-07',
                'tenkhachhang' => 'Nguyễn Ngân',
                'diachigiaohang' => '110 trần hưng đạo Quận 1',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-08',
                'phuongthucthanhtoan'=>'VnPay',
                'magiaodich'=> '123456780',
                'trangthai'=>'3',
                'users_id'=>3
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD4KHF4',
                'ngaylaphd' => '2023-07-07',
                'tenkhachhang' => 'Hải',
                'diachigiaohang' => '210 Huỳnh Mẫn Đạt Quận 5',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-08',
                'phuongthucthanhtoan'=>'Tiền Mặt',
                'trangthai'=>'5',
                'users_id'=>4
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD5FD45',
                'ngaylaphd' => '2023-07-01',
                'tenkhachhang' => 'Trần Bình',
                'diachigiaohang' => '65 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-08',
                'phuongthucthanhtoan'=>'MoMo',
                'magiaodich'=> '123456788',
                'trangthai'=>'1',
                'users_id'=>5
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD6GH55',
                'ngaylaphd' => '2023-07-02',
                'tenkhachhang' => 'Trần Bình',
                'diachigiaohang' => '65 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-08',
                'phuongthucthanhtoan'=>'MoMo',
                'magiaodich'=> '1234567234',
                'trangthai'=>'4',
                'users_id'=>5
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD7GHG5',
                'ngaylaphd' => '2023-07-03',
                'tenkhachhang' => 'Trần Bình',
                'diachigiaohang' => '65 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-08',
                'phuongthucthanhtoan'=>'MoMo',
                'magiaodich'=> '1234567248',
                'trangthai'=>'4',
                'users_id'=>5
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD8JHFD',
                'ngaylaphd' => '2023-07-04',
                'tenkhachhang' => 'Trần Bình',
                'diachigiaohang' => '65 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-08',
                'phuongthucthanhtoan'=>'MoMo',
                'magiaodich'=> '123456754',
                'trangthai'=>'4',
                'users_id'=>5
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD9JFFD',
                'ngaylaphd' => '2023-07-05',
                'tenkhachhang' => 'Trần Bình',
                'diachigiaohang' => '65 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-08',
                'phuongthucthanhtoan'=>'MoMo',
                'magiaodich'=> '123456722',
                'trangthai'=>'4',
                'users_id'=>5
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD10JFFD',
                'ngaylaphd' => '2023-07-06',
                'tenkhachhang' => 'Trần Bình',
                'diachigiaohang' => '65 Huỳnh Thúc Kháng Quận 1, TP HCM',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-08',
                'phuongthucthanhtoan'=>'MoMo',
                'magiaodich'=> '125556788',
                'trangthai'=>'4',
                'users_id'=>5
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD11KHCA',
                'ngaylaphd' => '2023-07-07',
                'tenkhachhang' => 'Nguyễn Ngân',
                'diachigiaohang' => '110 trần hưng đạo Quận 1',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-08',
                'phuongthucthanhtoan'=>'VnPay',
                'magiaodich'=> '123455781',
                'trangthai'=>'4',
                'users_id'=>3
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD12KHCA',
                'ngaylaphd' => '2023-06-29',
                'tenkhachhang' => 'Nguyễn Ngân',
                'diachigiaohang' => '110 trần hưng đạo Quận 1',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-01',
                'phuongthucthanhtoan'=>'VnPay',
                'magiaodich'=> '126456481',
                'trangthai'=>'4',
                'users_id'=>3
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD13KHCA',
                'ngaylaphd' => '2023-06-30',
                'tenkhachhang' => 'Nguyễn Ngân',
                'diachigiaohang' => '110 trần hưng đạo Quận 1',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-01',
                'phuongthucthanhtoan'=>'VnPay',
                'magiaodich'=> '124454781',
                'trangthai'=>'4',
                'users_id'=>3
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD14K6GA',
                'ngaylaphd' => '2023-06-28',
                'tenkhachhang' => 'Nguyễn Ngân',
                'diachigiaohang' => '110 trần hưng đạo Quận 1',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-06-30',
                'phuongthucthanhtoan'=>'VnPay',
                'magiaodich'=> '223454781',
                'trangthai'=>'4',
                'users_id'=>3
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD15K78A',
                'ngaylaphd' => '2023-06-04',
                'tenkhachhang' => 'Nguyễn Ngân',
                'diachigiaohang' => '110 trần hưng đạo Quận 1',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-06-07',
                'phuongthucthanhtoan'=>'VnPay',
                'magiaodich'=> '221234781',
                'trangthai'=>'4',
                'users_id'=>3
            ]
        );
        Hoadon::create(
            [
                'mahd' => 'HD16KHAA',
                'ngaylaphd' => '2022-07-24',
                'tenkhachhang' => 'Nguyễn Ngân',
                'diachigiaohang' => '110 trần hưng đạo Quận 1',
                'sdtkhachhang' => '0348575810',
                'hinhthucnhanhang' => 'Giao Đến Địa Chỉ',
                'ngaynhanhang'=>'2023-07-27',
                'phuongthucthanhtoan'=>'VnPay',
                'magiaodich'=> '221114781',
                'trangthai'=>'4',
                'users_id'=>3
            ]
        );
    }
}
