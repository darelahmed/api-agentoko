<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('item_penjualans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nota')->constrained('penjualans', 'id_nota');
            $table->foreignId('id_barang')->constrained('barangs');
            $table->integer('qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('item_penjualans');
    }
};
