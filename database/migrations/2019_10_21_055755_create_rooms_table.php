<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apartmentName');
            $table->string('apartmentAddress');
            $table->string('apartmentAmenities');
            $table->string('apartmentDescription');
            $table->string('apartmentRules');
            $table->decimal('apartmentPrice')->nullable();
            $table->integer('apartmentRatings')->nullable();
            $table->date('apartmentAvailablefrom')->nullable();
            $table->mediumText('apartmentImage')->nullable();
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
        Schema::dropIfExists('rooms');
    }
}
