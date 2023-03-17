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
        Schema::create('trip_detalis', function (Blueprint $table) {
            $table->id();
           
            $table->string('bank')->nullable();
            $table->text('description');
            $table->string('working_days');
            $table->string('price_day');
            $table->string('price_hour');
            // $table->string('enworking_days');
            //$table->string('time');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('city');
            $table->string('addrees');
            $table->string('season');
            $table->string('group_size')->default(10);
            $table->string('age')->default(7);
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->unsignedBigInteger('trip_id');
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_detalis');
    }
};
