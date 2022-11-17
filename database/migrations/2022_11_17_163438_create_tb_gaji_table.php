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
        Schema::create('tb_gaji', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal_gaji');
            $table->float('tunjangan');
            $table->float('potongan');
            $table->float('upah_lembur');
            $table->float('upah_gaji');
            $table->float('total_gaji');
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
        Schema::dropIfExists('tb_gaji');
    }
};
