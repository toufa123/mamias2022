<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *     'ISO','ISO3','ISONumeric','CountryName','Capital','ContinentCode'
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('ISO')->nullable();
            $table->string('ISO3')->nullable();
            $table->string('ISONumeric')->nullable();
            $table->string('CountryName')->nullable();
            $table->string('Capital')->nullable();
            $table->string('ContinentCode')->nullable();
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
        Schema::dropIfExists('countries');
    }
}
