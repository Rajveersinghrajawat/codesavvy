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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('services_title', 256);
            $table->text('services_description');
            $table->string('services_image', 256)->nullable();
            $table->string('services_slug', 256);
            $table->string('meta_title', 256); 
            $table->string('meta_description', 256);
            $table->text('focus_keypress');
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
        Schema::dropIfExists('services');
    }
};
