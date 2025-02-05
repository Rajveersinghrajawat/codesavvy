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
        Schema::table('services', function (Blueprint $table) {
            $table->string('services_heading1')->after('services_slug');
            $table->text('services_description2')->after('services_heading1');
            $table->string('services_images2')->nullable()->after('services_description2');
            $table->string('contact_heading')->after('services_images2');
            $table->text('contact_description')->after('contact_heading');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('services_heading1');
            $table->dropColumn('services_description2');
            $table->dropColumn('services_images2');
            $table->dropColumn('contact_heading');
            $table->dropColumn('contact_description');
        });
    }
};
