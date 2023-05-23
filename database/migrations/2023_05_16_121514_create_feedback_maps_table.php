<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('feedback_maps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('x_coordinates', 5, 2);
            $table->decimal('y_coordinates', 5, 2);
            $table->integer('noise_level');
            $table->integer('temperature_level');
            $table->integer('air_quality_level');
            $table->integer('higge_level');
            $table->enum('common_critique', ['yes', 'no']);
            $table->text('commentary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('feedback_maps');
    }
    
};
