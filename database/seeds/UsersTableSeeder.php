<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lucas Silva Nunes dos Santos',
            'email' => 'lucas@hbird.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
