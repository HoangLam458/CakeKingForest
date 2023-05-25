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
        DB::table('users')->insert([
            'email' => 'lamhoangtruong202@gmail.com',
            'password' => Hash::make('123456'),
            'loai' => 0,
            'tenkhachhang' => 'Trương Hoàng Lâm',
            'diachi' => '43 An Bình Phường 6 quận 5',
            'sdt' => '0348575810',
            'trangthai' => 1
        ]);
        DB::table('users')->insert([
            'email' => 'huynhngochao@gmail.com',
            'password' => Hash::make('123456'),
            'loai' => 0,
            'tenkhachhang' => 'Huỳnh Ngọc Hào',
            'diachi' => '43 An Bình phường 6 quận 7',
            'sdt' => '0348563898',
            'trangthai' => 1
        ]);
        DB::table('users')->insert([
            'email' => 'usertest01@gmail.com',
            'password' => Hash::make('123456'),
            'loai' => 1,
            'tenkhachhang' => 'Nguyễn Ngân',
            'diachi' => '110 trần hưng đạo Quận 1',
            'sdt' => '0348575810',
            'trangthai' => 1
        ]);
       
        DB::table('users')->insert([
            'email' => 'usertest02@gmail.com',
            'password' => Hash::make('123456'),
            'loai' => 1,
            'tenkhachhang' => 'Hải',
            'diachi' => '210 Huỳnh Mẫn Đạt Quận 5',
            'sdt' => '0348575810',
            'trangthai' => 1
        ]);
  
        DB::table('users')->insert([
            'email' => 'usertest03@gmail.com',
            'password' => Hash::make('123456'),
                'loai' => 1,
                'tenkhachhang' => 'Trần Bình',
                'diachi' => '65 huỳnh thúc kháng quận 1',
                'sdt' => '0348575810',
                'trangthai' => 1
        ]);
    }
}
