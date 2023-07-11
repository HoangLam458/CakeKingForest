<?php

namespace Database\Seeders;

use App\Models\Lienhe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LienheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Lienhe::create(
            [
                'email'=>'truonghoanglam@gmail.com',
                'tenkhachhang' => 'Trương Lâm',
                'tieude' => 'Thư phản hồi của người dùng',
                'noidung'=>'Một số trang còn reload lại khi bấm nút gây khó chịu cho người dùng',
                'trangthai'=> 0,
            ]
        );
    }
}
