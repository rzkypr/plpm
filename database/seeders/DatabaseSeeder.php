<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nim' => '192101008',
            'name' => 'Rizky Purnama Ramadhan',
            'email' => 'admin@mail.com',
            'phone' => '08882158789',
            'roles' => 'ADMIN',
            'password' => bcrypt('1234567890')
        ]);

        User::create([
            'nim' => '192101009',
            'name' => 'Rizka Ananda Maryadi',
            'email' => 'petugas@mail.com',
            'phone' => '08882158789',
            'roles' => 'PETUGAS',
            'password' => bcrypt('0987654321')
        ]);

        User::create([
            'nim' => '192101010',
            'name' => 'Rinaldy Anugrah Al-Furqon',
            'email' => 'user@mail.com',
            'phone' => '08882158789',
            'roles' => 'USER',
            'password' => bcrypt('1122334455')
        ]);
    }
}
