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
        Schema::table('feedback_maps', function (Blueprint $table) {
            $table->dropColumn('common_critique');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('feedback_maps', function (Blueprint $table) {
            $table->boolean('common_critique')->nullable();
        });
    }
    
};
