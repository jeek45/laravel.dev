<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        DB::table('message')->insert([
            'user_id' => '1',
            'text' => 'Привет мир! мы работаем',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('message')->insert([
            'user_id' => '2',
            'text' => 'Я второй',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('message')->insert([
            'user_id' => '3',
            'text' => 'Я третий',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('message')->insert([
            'user_id' => '2',
            'text' => 'Сообщение 2',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('message')->insert([
            'user_id' => '3',
            'text' => 'Сообщение 2',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('message')->insert([
            'user_id' => '2',
            'text' => 'Сообщение 3',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('message')->insert([
            'user_id' => '3',
            'text' => 'Сообщение 3',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('message')->insert([
            'user_id' => '2',
            'text' => 'Сообщение 4',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('message')->insert([
            'user_id' => '3',
            'text' => 'Сообщение 4',
            'created_at' => $date,
            'updated_at' => $date,
        ]);


    }
}
