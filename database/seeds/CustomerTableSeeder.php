<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();
        Customer::create([
            'name' => 'Davi Nomoeh Dani',
            'email' => 'davinomoehdanino@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
