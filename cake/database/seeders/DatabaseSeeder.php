<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        $this->call([SizeSeeder::class]);
        $this->call([LoaisanphamSeeder::class]);
        $this->call([SanphamSeeder::class]);
        $this->call([HoadonSeeder::class]);
        $this->call([ChitiethoadonSeeder::class]);
        $this->call([LienheSeeder::class]);
    }
}
