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
        // Schema::create('chirps', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        //     $table->string('message');            
        //     $table->timestamps();
        // });
    
        // Schema::create('plant', function (Blueprint $table) {
        //     $table->integer('nid');
        //     $table->string('author');            
        //     $table->string('genus');            
        //     $table->string('species');  
        //     $table->string('title');                     
        //     $table->string('published_place');            
        //     $table->string('published_in');            
        //     $table->string('published_year');            
        //     $table->string('original_in');            
        //     $table->string('notes');            
        // });

        Schema::create('seedlist', function (Blueprint $table) {
            $table->integer('nid');
            $table->string('title');                     
            $table->string('published_place');            
            $table->string('published_year');            
            $table->string('original_in');            
        });
    
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chirps');
    }
};
