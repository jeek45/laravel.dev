<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PremissionTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(MessageTableSeeder::class);

    }
}
