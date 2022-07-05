<?php

use App\Models\Item;
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
        Schema::create('item_sizes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Item::class);
            $table->string('size')->nullable(true);
            $table->decimal('price', 10, 2)->nullable(true);
            $table->decimal('sale_price', 10, 2)->nullable(true);
            $table->decimal('vip_price', 10, 2)->nullable(true);
            $table->integer('stock', false, true)->nullable(true);
            $table->boolean('availability')->virtualAs('stock <> 0 AND stock IS NOT NULL');    // Since availability is dependent on the stock amt
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_sizes');
    }
};
