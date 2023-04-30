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
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->string('resolution')->nullable();
            $table->integer('hz')->nullable();
            $table->string('ram')->nullable();
            $table->string('storage')->nullable();
            $table->string('front_camera')->nullable();
            $table->string('back_camera')->nullable();      
            $table->bigInteger('cpu_id')->nullable();
            $table->bigInteger('gpu_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parameters');
    }
};
