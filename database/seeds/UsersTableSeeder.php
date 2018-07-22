<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
            'name'=>'alexies iglesia',
            'email'=>'ialexies@gmail.com',
            'password'=>bcrypt('ialexies')
        ]);
    }
}
