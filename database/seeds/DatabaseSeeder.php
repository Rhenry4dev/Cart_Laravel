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
        DB::table('users')->insert(
            [
                'name' => 'Henrique',
                'email' => 'henrique@bubb.com.br',
                'password' => Hash::make('102030'),
                'user_type' => 'admin',

            ]
        );
    }
}
