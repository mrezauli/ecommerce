<?php
require "../bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('orders', function ($table) {
       $table->increments('id');
       $table->string('quantity');
       $table->string('address');
       $table->integer('product_id')->unsigned();
       $table->timestamps();
       $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
   });