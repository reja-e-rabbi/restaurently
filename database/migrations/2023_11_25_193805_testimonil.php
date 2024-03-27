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
        Schema::create('testimonil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sl')->nullable();
            $table->string('type')->nullable();
            $table->string('name')->nullable();
            $table->string('user_img_link')->nullable();
            $table->string('profession')->nullable();
            $table->string('country')->nullable();
            $table->text('dilog')->nullable();
            $table->text('img')->nullable();
            $table->text('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonil');
    }
};
