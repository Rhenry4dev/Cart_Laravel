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
       DB::table('payment_form')->insert(
       	
        
        ['name'=>'Cartão de Débito']
        
       );
    }
}
