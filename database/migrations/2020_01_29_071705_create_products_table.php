<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->text('description')->nullable();
        //null pani huna sakxa so w euse nullable
             $table->float('price');
             $table->integer('quantity')->nullable();
             //lrngth hunxa
            $table->unsignedBiginteger('category_id');
            $table->foreign('category_id')->references('id')->on('productcategory');
            
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
}
