<?php

use App\User;
use Illuminate\Database\Seeder;

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
            'name'      => 'Elan Suherlan',
            'email'     => 'elan.suherlan@erlan.web.id',
            'password'  => bcrypt('password')
        ]);
    }
}
