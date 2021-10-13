<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('inn');
            $table->string('rs',20);
            $table->string('mfo',5);
            $table->string('mfo_address');
            $table->string('ndc_kod')->nullable();
            $table->string('nked')->nullable();
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('phone',13)->nullable();
            $table->string('fax',13)->nullable();
            $table->string('exat')->nullable();
            $table->string('url')->nullable();
            $table->unsignedTinyInteger('province_id');
            $table->unsignedSmallInteger('region_id');
            $table->string('director');
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
