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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Categoris_id');
            $table->foreign('Categoris_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('Name', 50);
            $table->string('Code');
            $table->longText('Description')->nullable();
            $table->string('Stock');
            $table->string('Price');
            $table->string('DiscontPrice');
            $table->string('TaxRate');
            $table->string('Tags');
            $table->string('Brand');
            $table->string('Vendor');
            $table->text('image');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('products');
    }
};
