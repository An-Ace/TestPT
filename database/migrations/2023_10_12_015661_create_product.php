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
            $table->uuid('id')->primary();
            $table->string('productlabel');
            $table->string('modelNumber')->unique();
            $table->string('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('price');
            $table->timestamp('releasedate')->useCurrent();
            $table->json('attributes')->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamp('deleted_at')->nullable();
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