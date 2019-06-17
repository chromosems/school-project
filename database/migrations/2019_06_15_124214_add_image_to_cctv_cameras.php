<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageToCctvCameras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cctv_cameras', function (Blueprint $table) {
            //
            $table->text('image')->nullable()->after('location');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cctv_cameras', function (Blueprint $table) {
            //
            $table->dropColumn('image');
        });
    }
}
