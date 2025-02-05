<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queres', function (Blueprint $table) {
            $table->id();
            $table->string('name' ,256);
            $table->string('email',256);    
            $table->string('phone_number', 256);
            $table->string('service', 256);
            $table->string('massage', 256);
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
        Schema::dropIfExists('queres');
    }
};
