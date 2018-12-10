<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('industry_id');
            $table->integer('country_id');
            $table->string('type')->nullable(true);
            $table->string('name')->unique();
            $table->string('avatar')->nullable(true);
            $table->string('address')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('website')->nullable(true);
            $table->date('date_of_incorporation')->nullable(true);
            $table->integer('country_of_incorporation')->nullable(true);
            $table->string('registration_number')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
