<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCctvCamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cctv_cameras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('company_name');
            $table->string('location');
            $table->string('cameras');
            $table->string('phone_number');
            $table->string('email');
            $table->text('bio' );
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
        Schema::dropIfExists('cctv_cameras');
    }
}
