<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'sharaelariggens@cms.com',
            'email_verified_at' => now(),
            'password' => Hash::make('KJoy*&(yuIuIGiuIU'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
