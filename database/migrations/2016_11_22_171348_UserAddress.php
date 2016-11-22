<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', 20)->default('');
            $table->string('address', 255)->default('');
            $table->string('city', 50)->default('');
            $table->string('state', 30)->default('');
            $table->string('zipcode', 10)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->removeColumn('phone');
            $table->removeColumn('address');
            $table->removeColumn('city');
            $table->removeColumn('state');
            $table->removeColumn('zipcode');
        });
    }
}
