<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeachcourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beachcourts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courtName');
            $table->string('street');
            $table->string('houseNumber');
            $table->string('postalCode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('operator');
            $table->string('organization');
            $table->string('coordinates');
            $table->string('equipment');
            $table->string('sanitary');
            $table->double('realRating');
            $table->integer('ratingCount');
            $table->timestamp('ratingDate');
            $table->string('picturePath');
            $table->rememberToken();
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
        Schema::dropIfExists('beachcourts');
    }
}
