<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiPengembalian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengembalians', function (Blueprint $table) {
            $table->unsignedInteger('id_petugas');
            $table->unsignedInteger('id_bukus');
            $table->unsignedInteger('id_anggotas');
            $table->foreign('id_petugas')->references('id')->on('petugas')->onDelete('cascade');
            $table->foreign('id_bukus')->references('id')->on('bukus')->onDelete('cascade');
            $table->foreign('id_anggotas')->references('id')->on('anggotas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengembalians', function (Blueprint $table) {
            //
        });
    }
}
