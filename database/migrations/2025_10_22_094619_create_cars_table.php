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
        Schema::create('cars', function (Blueprint $table) {
            $table->id('car_id');
            $table->string('car_name');
            $table->string('make')->nullable();         
            $table->string('model')->nullable();        
            $table->string('variant')->nullable(); 
            $table->decimal('mileage', 10, 2)->nullable(); 
            $table->decimal('price', 12, 2)->nullable();   
            $table->string('year')->nullable();
            $table->string('reg_number')->nullable()->unique();
            $table->string('vin')->nullable();           
            $table->string('fuel_type')->nullable();     
            $table->string('transmission')->nullable();  
            $table->string('body_type')->nullable();     
            $table->integer('doors')->nullable();
            $table->integer('seats')->nullable();
            $table->integer('engine_size')->nullable();  
            $table->integer('hp')->nullable();
            $table->string('color')->nullable();
            $table->string('drive_type')->nullable();    
            $table->string('condition')->nullable(); 
            $table->string('cylinder')->nullable();   
            $table->integer('stock')->default(1);
            $table->text('description')->nullable();

            // Images
            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
