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
        Schema::create('why-choose-uses', function (Blueprint $table) {
            $table->id();
            $table->string('heading', 256); 
            $table->text('description'); 
            $table->unsignedBigInteger('service_id'); 
            $table->boolean('status')->default(1); 
            $table->timestamps();

               // Add the foreign key constraint
               $table->foreign('service_id')
               ->references('id')
               ->on('services')
               ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('why-choose-uses');
    }
};
