<?php

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
        $this->call(QuestionareTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
    }
}
