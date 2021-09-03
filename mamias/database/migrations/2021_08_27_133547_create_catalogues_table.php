<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCataloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogues', function (Blueprint $table) {
            $table->id();
            $table->string('Species')->nullable;
            $table->string('speciesCode')->nullable;
            $table->string('authority')->nullable;
            $table->string('Aphia')->nullable;
            $table->string('WormsUrl')->nullable;
            $table->string('kingdom')->nullable;
            $table->string('phylum')->nullable;
            $table->string('class')->nullable;
            $table->string('ordersp')->nullable;
            $table->string('family')->nullable;
            $table->string('refTax')->nullable;
            $table->string('itisLink')->nullable;
            $table->string('CoLlink')->nullable;
            $table->string('EoLlink')->nullable;
            $table->string('GBIFlink')->nullable;
            $table->string('status')->nullable;
            $table->longText('status')->nullable;
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
        Schema::dropIfExists('catalogues');
    }
}
