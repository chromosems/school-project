<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {  
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->unsigned()->index()->nullable();

            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('location')->nullable();
            $table->string('contact')->nullable();
            
            $table->enum('role', ['Admin', 'Technician', 'Customer'])->default('Customer');
            $table->text('image')->nullable();
            $table->tinyInteger('isActive')->default(1);
            
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('company_id')->references('id')
                ->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
