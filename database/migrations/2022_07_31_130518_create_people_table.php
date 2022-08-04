<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('people_type', ['LEGAL', 'NATURAL']);
            $table->string('name', 120);
            $table->string('nickname', 120)->nullable();
            $table->string('nif', 21)->nullable();
            $table->string('email', 89)->nullable();
            $table->string('zip_code', 9)->nullable();
            $table->string('district')->nullable();
            $table->string('address', 255);
            $table->string('phone', 15);
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
        Schema::dropIfExists('people');
    }
}
