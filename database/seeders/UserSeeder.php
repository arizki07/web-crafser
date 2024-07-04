<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Ahmad Rizki',
                'username' => 'Rizki',
                'email' => 'ahmadrizki0704@gmail.com',
                'role' => 'OWNER',
                'password' => bcrypt('Rizki.123'),
            ],
            [
                'name' => 'Dimas Pangestu',
                'username' => 'Dimas',
                'email' => 'Dpangestu@gmail.com',
                'role' => 'OWNER',
                'password' => bcrypt('Dimas.123'),
            ],
            [
                'name' => 'Moch Syarif Hidayat',
                'username' => 'Syarif',
                'email' => 'mochsyarif1306@gmail.com',
                'role' => 'OWNER',
                'password' => bcrypt('Syarif.123'),
            ],
        ];

        foreach ($users as $us) {

            User::create($us);
        }
    }
}
