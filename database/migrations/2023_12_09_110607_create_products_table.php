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
            $table->string('title');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('price')->nullable();
            $table->text('desc')->nullable();
            $table->text('about')->nullable();
            $table->string('sku')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->string('dime')->nullable();
            $table->boolean('status')->default(1);
            $table->unsignedInteger('amount')->nullable();
            $table->string('image')->default('media/shop/no-image.png');
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
