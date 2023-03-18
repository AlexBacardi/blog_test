<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
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
                'name' => 'Автор не известен',
                'email' => 'author_unknow@g.g',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Автор',
                'email' => 'author@g.g',
                'password' => Hash::make('123123'),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
