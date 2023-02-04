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
        Schema::table('loadcell', function (Blueprint $table) {
            $table->unsignedBigInteger('data_barang_id')->after('id');
            $table->foreign('data_barang_id')->references('id')->on('data_barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loadcell', function (Blueprint $table) {
            $table->dropForeign(['data_barang_id']);
            $table->dropColumn('data_barang_id');
        });
    }
};
