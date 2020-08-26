<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'amr',
            'email' => 'amr@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'abed',
            'email' => 'abed@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'mostafa',
            'email' => 'mostafa@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    } // end of public function
}// end of seeder
