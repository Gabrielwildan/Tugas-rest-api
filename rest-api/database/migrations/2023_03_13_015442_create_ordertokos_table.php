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
        Schema::create('ordertokos', function (Blueprint $table) {
            $table->increments('idorder');
            $table->date('tglorder');
            $table->integer('idpelanggan');
            $table->float('total');
            $table->float('bayar');
            $table->string('kurir');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordertokos');
    }
};
