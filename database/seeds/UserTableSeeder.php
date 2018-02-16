<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'is_admin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'demo',
            'username' => 'demo',
            'password' => Hash::make('demo'),
            'is_admin' => '0',
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'username' => 'user',
            'password' => Hash::make('123456'),
            'is_admin' => '0',
        ]);
    }
}
