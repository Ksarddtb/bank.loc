<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->tinyInteger('type')->default(1);
            $table->tinyInteger('sex')->default(1);
            $table->unsignedBigInteger('code')->default(1);
            $table->date('add_date');
            $table->string('workaddress');
            $table->unsignedBigInteger('inn');
            $table->unsignedBigInteger('pen_chet');
            $table->json('phone');
            $table->string('email')->nullable();
            $table->string('name');
            $table->string('sname');
            $table->string('fname');
            $table->date('bdate');
            $table->string('seria');
            $table->date('pass_adate');
            $table->date('pass_edate');
            $table->string('pass_where');
            $table->integer('province');
            $table->integer('region');
            $table->integer('status')->default(0);
            $table->string('remark')->nullable();
            $table->integer('company_id')->default(1);
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
        Schema::dropIfExists('clients');
    }
}
