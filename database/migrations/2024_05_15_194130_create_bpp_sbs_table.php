<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bpp_sbs', function (Blueprint $table) {
            $table->id();
            $table->string('nobppsb')->unique();
            $table->string('namapel');
            $table->string('alamatpel');
            $table->string('diterima');
            $table->string('pipapvc');
            $table->string('sockpvc');
            $table->string('sockddpvc');
            $table->string('sockdlpvc');
            $table->string('kneepvc');
            $table->string('kneeddpvc');
            $table->string('kran');
            $table->string('stopkran');
            $table->string('dnipplegi');
            $table->string('watermeter');
            $table->string('flughkran');
            $table->string('isolasiseltape');
            $table->string('lem');
            $table->string('clampsaddle');
            $table->string('clampsaddleUk');
            $table->string('segelkoplingwm');
            $table->string('boxmeter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bpp_sbs');
    }
};