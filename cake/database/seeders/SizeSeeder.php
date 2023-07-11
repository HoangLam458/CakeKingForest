<?php

namespace Database\Seeders;
use App\Models\size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::create(
            [
                'tensize' => '17cm x 7cm',
                'phantram' => 0,
                'trangthai'=> 1,
            ]
        );

        Size::create(
            [
                'tensize' => '29cm x 7cm',
                'phantram' => 5,
                'trangthai'=> 1,
            ]
        );

        Size::create(
            [
                'tensize' => '39cm x 7cm',
                'phantram' => 10,
                'trangthai'=> 1,
            ]
        );
    }
}
