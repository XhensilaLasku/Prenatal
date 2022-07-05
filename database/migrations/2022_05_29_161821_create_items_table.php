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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('mpn', 20)->nullable();
            $table->decimal('price', 10, 2)->nullable(true);
            $table->decimal('sale_price', 10, 2)->nullable(true);
            $table->decimal('vip_price', 10, 2)->nullable(true);
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('marche')->nullable();
            $table->enum('genere', ['Femmina', 'Unisex', 'Maschio'])->nullable();
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
        Schema::dropIfExists('items');
    }
};
