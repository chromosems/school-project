<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFireAlarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fire__alarms', function (Blueprint $table) {
            $table->BigIncrements('id');
//            $table->unsignedBigInteger('customers_id')->index();
            $table->string('company_name');
            $table->string('location');
            $table->string('fire_alarm_type');
            $table->string('email');
            $table->string('phone_number');
            $table->dateTime('date');
            $table->text('bio');
            $table->timestamps();
//            $table->foreign('customers_id')->references('id')->on('customers')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fire__alarms');
    }
}
