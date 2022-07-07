<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaskantorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaskantor', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->integer('saldo');
            $table->integer('pemasukan');
            $table->string('pembayaran');
            $table->integer('pengeluaran')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('kaskantor');
    }
}
