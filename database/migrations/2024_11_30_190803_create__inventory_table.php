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
        Schema::create('_inventory', function (Blueprint $table) {
            $table->id('InvId');
            $table->string('ProductId');
            $table->string('StoreId');
            $table->string('OrderDetId');
            $table->integer('TotalPrice');
            $table->string('OrderStaus');
            $table->string('AgreeOrder');
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
        Schema::dropIfExists('_inventory');
    }
};
