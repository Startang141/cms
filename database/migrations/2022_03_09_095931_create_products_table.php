<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->String('productName',100)->index();
            $table->String('detailProduct',500);
            $table->String('price',50);
            $table->String('picture',100); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
