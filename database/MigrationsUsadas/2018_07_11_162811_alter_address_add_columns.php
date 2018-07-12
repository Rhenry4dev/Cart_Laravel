<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddressAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('address_register', function (Blueprint $table) 
        {
        $table->string('street_name');
        $table->unsignedInteger('number');
        $table->string('public_place');
        $table->string('town');
        $table->string('state');
        $table->string('country');
        $table->string('CEP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       $table->dropColumn('street_name');
       $table->dropColumn('number');
       $table->dropColumn('public_place');
       $table->dropColumn('town');
       $table->dropColumn('state');
       $table->dropColumn('country');
       $table->dropColumn('CEP');

    }
}
