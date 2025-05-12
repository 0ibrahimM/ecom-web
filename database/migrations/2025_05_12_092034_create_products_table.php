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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger ('cat_id') ;
            $table->unsignedBigInteger ('sub_cat_id')->nullable();
            $table->double ('regular_price') ;
            $table->double ('discount_prise')->nullable() ;
            $table->double ('buying_price') ;
            $table->integer('qty');
            $table->integer('sku_code');
            $table->longText('description');
            $table->longText('policy');
            $table->integer('product_type');
            $table->integer('image');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
