<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedTinyInteger('subject_id')->nullable();
            $table->unsignedTinyInteger('kodcb')->default(17);
            $table->boolean('status')->default(true);
            $table->date('deactive')->nullable();
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
        Schema::dropIfExists('credit_types');
    }
}
