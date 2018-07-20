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
        DB::table('api_tokens')->insert(
            [
                'name' => 'Henrique',
                'token' => str_random(60),

            ]
        );
    }
}
