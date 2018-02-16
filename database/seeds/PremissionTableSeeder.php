<?php

use Illuminate\Database\Seeder;

class PremissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('premissions')->insert([
            'is_admin' => '1',
            'create' => '1',
            'update' => '1',
            'delete' => '1'
        ]);

        DB::table('premissions')->insert([
            'is_admin' => '0',
            'create' => '1',
            'update' => '1',
            'delete' => '1'
        ]);

    }
}
