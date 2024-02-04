<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class loginAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'email' => 'admins@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Penyewa',
                'email' => 'penyewa@gmail.com',
                'password' => bcrypt('penyewa123'),
                'role' => 'Penyewa',
            ]
        ];

        DB::table('users')->insert($data);
    }
}
