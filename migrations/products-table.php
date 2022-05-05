<?php
require "../bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('products', function ($table) {
       $table->increments('id');
       $table->string('name');
       $table->string('color');
       $table->string('size');
       $table->timestamps();
   });