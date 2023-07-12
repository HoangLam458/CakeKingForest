<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Admin
        DB::table('users')->insert([
            'email' => 'lamhoangtruong202@gmail.com',
            'password' => Hash::make('123456'),
            'loai' => 2,
            'tenkhachhang' => 'Trương Hoàng Lâm',
            'diachi' => '43 An Bình Phường 6 quận 5',
            'sdt' => '0348575810',
            'trangthai' => 1
        ]);
        DB::table('users')->insert([
            'email' => 'shirosaki7902@gmail.com',
            'password' => Hash::make('123456'),
            'loai' => 2,
            'tenkhachhang' => 'Huỳnh Ngọc Hào',
            'diachi' => '43 An Bình phường 6 quận 7',
            'sdt' => '0348563898',
            'trangthai' => 1
        ]);
        //nhân viên
        DB::table('users')->insert([
            'email' => '0306201432@caothang.edu.vn',
            'password' => Hash::make('123456'),
            'loai' => 1,
            'tenkhachhang' => 'Huỳnh Hào',
            'diachi' => '110 trần hưng đạo Quận 1',
            'sdt' => '0348575810',
            'trangthai' => 1
        ]);

        DB::table('users')->insert([
            'email' => '0306201458@caothang.edu.vn',
            'password' => Hash::make('123456'),
            'loai' => 1,
            'tenkhachhang' => 'Trương Lâm',
            'diachi' => '210 Huỳnh Mẫn Đạt Quận 5',
            'sdt' => '0348575810',
            'trangthai' => 1
        ]);
        //khách hàng
        DB::table('users')->insert([
            'email' => 'huynhhao792002@gmail.com',
            'password' => Hash::make('123456'),
            'loai' => 0,
            'tenkhachhang' => 'Huỳnh Ánh Ngọc',
            'diachi' => '65 huỳnh thúc kháng quận 1',
            'sdt' => '0348575810',
            'trangthai' => 1
        ]);
        DB::table('users')->insert([
            'email' => 'huynhngockhoa1009@gmail.com',
            'password' => Hash::make('123456'),
            'loai' => 0,
            'tenkhachhang' => 'Huỳnh Ngọc Khoa',
            'diachi' => '65 huỳnh thúc kháng quận 1',
            'sdt' => '0348575810',
            'trangthai' => 1
        ]);
        DB::table('users')->insert([
            'email' => 'huynhtuyetnhu1802@gmail.com',
            'password' => Hash::make('123456'),
            'loai' => 0,
            'tenkhachhang' => 'Huỳnh Ngọc Tuyết Như',
            'diachi' => '65 huỳnh thúc kháng quận 1',
            'sdt' => '0348575810',
            'trangthai' => 1
        ]);
    }
}
