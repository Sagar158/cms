<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
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
            'email' => 'khawar@hwryk.com',
            'username' => 'khawar@hwryk.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
