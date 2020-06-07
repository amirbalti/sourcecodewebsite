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
            $table->increments('productId');
            $table->string('productName');
			$table->float('productPrice');
			$table->string('productCode');
			$table->boolean('productInstock');
			$table->float('productDiscount');
			$table->string('productSizes');
            $table->text('productDetails');
        });

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
}
}
