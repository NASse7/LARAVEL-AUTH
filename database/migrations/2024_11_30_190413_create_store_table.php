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
        Schema::create('_store', function (Blueprint $table) {
            $table->id('StoreId');
            $table->string('NameAr');
            $table->string('NameEn');
            $table->string('DescriptionAr');
            $table->string('DescriptionEn');
            $table->string('StoreLocation');
            $table->integer('PhoneNumber');
            $table->string('Email');
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
        Schema::dropIfExists('_store');
    }
};
