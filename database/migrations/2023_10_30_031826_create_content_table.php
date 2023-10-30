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
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->string('nama_prov');
            $table->text('sejarah');
            $table->string('pict_sejarah');
            $table->text('baju_adat');
            $table->string('pict_baju_adat');
            $table->text('rumah_adat');
            $table->string('pict_rumah_adat');
            $table->text('lagu_daerah');
            $table->string('pict_lagu_daerah');
            $table->text('senjata');
            $table->string('pict_senjata');
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
        Schema::dropIfExists('content');
    }
};
