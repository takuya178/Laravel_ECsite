<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => Hash::make('passowrd123'),
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => 'test2',
                'email' => 'test@test2.com',
                'password' => Hash::make('passowrd123'),
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => 'test3',
                'email' => 'test@test3.com',
                'password' => Hash::make('passowrd123'),
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => 'test4',
                'email' => 'test@test4.com',
                'password' => Hash::make('passowrd123'),
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => 'test5',
                'email' => 'test@test5.com',
                'password' => Hash::make('passowrd123'),
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => 'test6',
                'email' => 'test@test6.com',
                'password' => Hash::make('passowrd123'),
                'created_at' => '2021/01/01 11:11:11'
            ],
        ]);
    }
}
