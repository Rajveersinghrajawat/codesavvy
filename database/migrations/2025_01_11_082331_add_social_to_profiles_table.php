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
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('fackbook')->after('admin_email');
            $table->string('whatsapp')->after('fackbook');
            $table->string('instagram')->after('whatsapp');
            $table->string('linkedin')->after('instagram');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('fackbook');
            $table->dropColumn('whatsapp');
            $table->dropColumn('instagram');
            $table->dropColumn('linkedin');
        });
    }
};
