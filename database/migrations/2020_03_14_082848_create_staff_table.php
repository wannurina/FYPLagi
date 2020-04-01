<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->integer('StaffNo')->unique();
            $table->string('password');
            $table->string('Name');
            $table->string('IC_passport');
            $table->string('Dept');
            $table->string('Address');
            $table->string('Postcode');
            $table->string('City');
            $table->string('State');
            $table->string('PhoneNo');
            $table->string('Email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
